<?php
require_once 'modelo/base_modelo.php';
class CategoriaModelo extends BaseModelo{
  private $categorias;

  function getCategorias(){
    $this->categorias = array();
    $categoria='';
    $consultacat = $this->db->prepare("SELECT * FROM categoria ORDER BY id_categoria");
    $consultacat->execute();
    //Todas las categorias
    while($categoria = $consultacat->fetch(PDO::FETCH_ASSOC)) {
      $this->categorias[]=$categoria;
    }
    return $this->categorias;
  }

  function getNomCategoria($id_categoria){
    $consultaCategoria= $this->db->prepare("SELECT nombre FROM categoria where id_categoria=?");
    $consultaCategoria->execute(array($id_categoria));
    $nombre_categoria = $consultaCategoria->fetch(PDO::FETCH_ASSOC);
    return $nombre_categoria["nombre"];
  }

  function agregarCategoria($categoria){
    if(strlen($categoria) > 4){
      try{
        $this->db->beginTransaction();
        $queryInsert = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
        $queryInsert->execute(array($categoria));
        $this->db->commit();
      }
      catch(Exception $e)
      {
        $this->db->rollBack();
      }
    }
  }
}
?>
