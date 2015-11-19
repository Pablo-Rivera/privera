<?php
require_once 'base_modelo.php';
require_once 'categoria_modelo.php';
class ProductosModelo extends BaseModelo{
  private $productos;

  function getProductos(){
    $categoria=new CategoriaModelo();
    $this->productos = array();
    $producto='';
    $consultaprod = $this->db->prepare("SELECT * FROM producto ORDER BY id_producto");
    $consultaprod->execute();
    //Todas los productos
    while($producto = $consultaprod->fetch(PDO::FETCH_ASSOC))// PDO::FETCH_ASSOC trae un array indexado por nombre columna
    {
      $producto["fk_id_categoria"]=$categoria->getNomCategoria($producto['fk_id_categoria']);
      $consultaImagen= $this->db->prepare("SELECT path FROM imagen where fk_id_producto=?");
      $consultaImagen->execute(array($producto['id_producto']));
      $imagenes = $consultaImagen->fetch();
      $producto["imagenes"]=$imagenes["path"];
      $this->productos[]=$producto;
    }
    return $this->productos;
  }

  private function subirImagenes($imagenes){
      $carpeta = "uploads/imagenes/";
      $destinos_finales = array();
      foreach ($imagenes["tmp_name"] as $key => $value) {
        $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
        move_uploaded_file($value, end($destinos_finales));
      }

      return $destinos_finales;
    }

  function agregarProducto($idcategoria, $nombre, $descripcion, $precio, $imagenes){
    if($idcategoria && $nombre && $descripcion && $precio && $imagenes["name"][0]){//$imagenes["name"][0] me fijo si hay nombre asignado
      try{
        $destinos_finales=$this->subirImagenes($imagenes);
    //Inserto la tarea
        $this->db->beginTransaction();
        $consulta = $this->db->prepare('INSERT INTO producto(fk_id_categoria, nombre, descripcion, precio) VALUES(?,?,?,?)');
        $consulta->execute(array($idcategoria, $nombre, $descripcion, $precio));
        $id_producto = $this->db->lastInsertId();
    //Insertar las imagenes
        foreach ($destinos_finales as $value) {
          $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_producto,path) VALUES(?,?)');
          $consulta->execute(array($id_producto, $value));
        }
        $this->db->commit();

      }
        catch(Exception $e){

          $this->db->rollBack();
      }
    }
  }

  function getProducto($id_producto){
    $producto='';
    $consultaprod = $this->db->prepare("SELECT * FROM producto where id_producto=?");
    $consultaprod->execute(array($id_producto));
    $producto=$consultaprod->fetch(PDO::FETCH_ASSOC);

    $consultaCategoria= $this->db->prepare("SELECT nombre FROM categoria where id_categoria=?");
    $consultaCategoria->execute(array($producto['fk_id_categoria']));
    $nombre_categoria = $consultaCategoria->fetch(PDO::FETCH_ASSOC);
    $producto["fk_id_categoria"]=$nombre_categoria["nombre"];

    $consultaImagen= $this->db->prepare("SELECT path FROM imagen where fk_id_producto=?");
    $consultaImagen->execute(array($producto['id_producto']));
    while($imagen = $consultaImagen->fetch(PDO::FETCH_ASSOC)) {
				$producto['imagenes'][] = $imagen['path'];
			}
    return $producto;
  }

  function agregarImagenes($id_producto, $imagenes){
    if($imagenes){
      $rutas=$this->subirImagenes($imagenes);
      $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_producto,path) VALUES(?,?)');
      foreach($rutas as $ruta){
        $consulta->execute(array($id_producto,$ruta));
      }
    }
  }

  function eliminarProducto($idproducto){
    try{
      $this->db->beginTransaction();
      $consultaimg = $this->db->prepare('DELETE FROM imagen WHERE fk_id_producto=?');
      $consultaimg->execute(array($idproducto));
      $consulta = $this->db->prepare('DELETE FROM producto WHERE id_producto=?');
      $consulta->execute(array($idproducto));
      $this->db->commit();
      return 'producto borrado';
    }
    catch(Exception $e){
      $this->db->rollBack();
      return 'No se  pudo borrar el producto';
    }
  }

}
?>
