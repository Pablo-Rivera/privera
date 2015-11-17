<?php
require_once 'base_modelo.php';
class CategoriaModelo extends BaseModelo{

  function getCategorias(){
    $consultacat = $this->db->prepare("SELECT * FROM categoria ORDER BY id_categoria");
    $consultacat->execute();
    return $consultacat->fetchAll(PDO::FETCH_ASSOC);//Todas las categorias
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
        $ultimoId=$this->db->lastInsertId();
        $this->db->commit();
        return $ultimoId;
      }
      catch(Exception $e){
        $this->db->rollBack();
      }
    }
  }

  function eliminarCategoria($idcategoria){
    $consultaProd= $this->db->prepare("SELECT 1 FROM producto where fk_id_categoria=?");
    $consultaProd->execute(array($idcategoria));
    $existeProd=$consultaProd->fetch();
    if(!$existeProd)
    {
      $consulta = $this->db->prepare('DELETE FROM categoria WHERE id_categoria=?');
      $consulta->execute(array($idcategoria));
    }
    if($consulta->rowCount() > 0)
      return 'Categoria Borrada';
    else
      return 'No se Borro';
  }

}
?>
