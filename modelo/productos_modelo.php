<?php
class ProductosModelo {
  private $productos;
  private $categorias;
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=web2;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  // private function subirImagenes($imagenes){
  //   $carpeta = "uploads/imagenes/";
  //   $destinos_finales = array();
  //   foreach ($imagenes["tmp_name"] as $key => $value) {
  //     $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
  //     move_uploaded_file($value, end($destinos_finales));
  //   }
  //   return $destinos_finales;
  // }

  function getCategorias(){
    $categorias = array();
    $categoria='';
    $consultacat = $this->db->prepare("SELECT * FROM categoria");
    $consultacat->execute();
    //Todas las categorias
    while($categoria = $consultacat->fetch(PDO::FETCH_ASSOC)) {
      $categorias[]=$categoria;
    }
    return $categorias;
  }

  function getProductos(){
    $productos = array();
    $producto='';
    $consultaprod = $this->db->prepare("SELECT * FROM producto");
    $consultaprod->execute();
    //Todas los productos
    while($producto = $consultaprod->fetch(PDO::FETCH_ASSOC))// PDO::FETCH_ASSOC trae un array indexado por nombre columna
    {
      $consultaCategoria= $this->db->prepare("SELECT nombre FROM categoria where id_categoria=?");
      $consultaCategoria->execute(array($producto['fk_id_categoria']));
      $nombre_categoria = $consultaCategoria->fetchAll()[0];//SOLO SE PUEDE UNA CATEGORA POR PRODUCTO POR ESO EL 0
      $producto["fk_id_categoria"]=$nombre_categoria["nombre"];
      $consultaImagen= $this->db->prepare("SELECT path FROM imagen where fk_id_producto=?");
      $consultaImagen->execute(array($producto['id_product']));
      $imagenes = $consultaImagen->fetchAll()[0];//SOLO SE PUEDE UNA CATEGORA POR PRODUCTO POR ESO EL 0
      $producto["imagenes"]=$imagenes["path"];
      $productos[]=$producto;
    }
    return $productos;
  }

  // function agregarTarea($tarea, $imagenes){
  //   try{
  //     $destinos_finales=$this->subirImagenes($imagenes);
  //   //Inserto la tarea
  //     $this->db->beginTransaction();
  //     $consulta = $this->db->prepare('INSERT INTO tarea(tarea) VALUES(?)');
  //     $consulta->execute(array($tarea));
  //     $id_tarea = $this->db->lastInsertId();
  //   //Insertar las imagenes
  //     foreach ($destinos_finales as $key => $value) {
  //       $consulta = $this->db->prepare('INSERT INTO imagen(id,fk_id_tarea,path) VALUES(1,?,?)');
  //       $consulta->execute(array($id_tarea, $value));
  //     }
  //     $this->db->commit();
  //   }
  //   catch(Exception $e){
  //     $this->db->rollBack();
  //   }
  // }

  // function borrarTarea($id_tarea){
  //   $consulta = $this->db->prepare('DELETE FROM tarea WHERE id=?');
  //   $consulta->execute(array($id_tarea));
  // }

  // function realizarTarea($id_tarea){
  //   $consulta = $this->db->prepare('UPDATE tarea SET realizada=1 WHERE id=?');
  //   $consulta->execute(array($id_tarea));
  // }
}
?>
