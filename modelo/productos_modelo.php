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
      move_uploaded_file($value, "../".end($destinos_finales));
    }
    return $destinos_finales;
    }

  function agregarProducto($idcategoria, $nombre, $descripcion, $precio, $imagenes){
    if($idcategoria && $nombre && $descripcion && $precio && $imagenes["name"][0]){//$imagenes["name"][0] me fijo si hay nombre asignado
      try{
        $this->db->beginTransaction();
        $destinos_finales=$this->subirImagenes($imagenes);
    //Inserto la tarea
        $consulta = $this->db->prepare('INSERT INTO producto(fk_id_categoria, nombre, descripcion, precio) VALUES(?,?,?,?)');
        $consulta->execute(array($idcategoria, $nombre, $descripcion, $precio));
        $id_producto = $this->db->lastInsertId();
    //Insertar las imagenes
        foreach ($destinos_finales as $value) {
          $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_producto,path) VALUES(?,?)');
          $consulta->execute(array($id_producto, $value));
        }
        $this->db->commit();
        return $this->getProducto($id_producto);
      }
      catch(Exception $e){
        $this->db->rollBack();
        return 'No se  pudo agregar el producto';
      }
    }
    else
      return "no se pudo agregar el producto faltan campos";
  }

  function modificarProducto($idproducto, $idcategoria, $nombre, $descripcion, $precio){
    if(strlen($nombre) > 4 && strlen($descripcion) > 1 && $precio > 0)
    {
      try{
        $this->db->beginTransaction();
        $queryUpdate = $this->db->prepare('UPDATE producto SET fk_id_categoria=?, nombre=?, descripcion=?, precio=? WHERE id_producto=?');
        $queryUpdate->execute(array($idcategoria, $nombre, $descripcion, $precio, $idproducto));
        $this->db->commit();

        $categoria=new CategoriaModelo();
        return $categoria->getNomCategoria($idcategoria);
      }
      catch(Exception $e){
        $this->db->rollBack();
        return 'No se  modifico el producto';
      }
    }
    else {
      return 'Campos incorrectos';
    }
  }

  function getProducto($id_producto){
    $producto='';
    $consultaprod = $this->db->prepare("SELECT * FROM producto where id_producto=?");
    $consultaprod->execute(array($id_producto));
    $producto=$consultaprod->fetch(PDO::FETCH_ASSOC);

    $producto["id_categoria"]=$producto["fk_id_categoria"];
    $categoria=new CategoriaModelo();
    $producto["fk_id_categoria"]=$categoria->getNomCategoria($producto['fk_id_categoria']);

    $consultaImagen= $this->db->prepare("SELECT * FROM imagen where fk_id_producto=?");
    $consultaImagen->execute(array($producto['id_producto']));
    while($imagen = $consultaImagen->fetch(PDO::FETCH_ASSOC)) {
				$producto['imagenes'][] = $imagen;
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

  function eliminarImagen($idimagen){
    try{
      $this->db->beginTransaction();
      $consultaimg = $this->db->prepare('DELETE FROM imagen WHERE id_imagen=?');
      $consultaimg->execute(array($idimagen));
      $this->db->commit();
      return 'imagen borrado';
    }
    catch(Exception $e){
      $this->db->rollBack();
      return 'No se  pudo borrar la imagen';
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
