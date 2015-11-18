<?php
require_once 'api_base.php';
require_once '../modelo/categoria_modelo.php';

class CategoriaApi extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->categorias = new CategoriaModelo();
  }

  function categoria(){
    switch ($this->method) {
      case 'GET': // consultar
        return $this->categorias->getCategorias();
        break;
      case 'DELETE': // eliminar
        if(count($this->args) > 0) return $this->categorias->eliminarCategoria($this->args[0]);
        break;
      case 'POST':  //guardar
        if(isset($_POST['categoria'])) return $this->categorias->agregarCategoria($_POST['categoria']);
        break;
      case 'PUT': // modificar
        if(count($this->args) > 0) return $this->categorias->modificarCategoria($this->args[0],$this->data->nombre);
        break;
      default:
            return 'Verbo no soportado';
        break;
    }
  }
}

?>
