<?php
require_once 'api_base.php';
require_once '../modelo/categoria_modelo.php';

class TareaApi extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->categorias = new CategoriaModelo();
  }

  function categorias(){
    switch ($this->method) {
      case 'GET': // consultar
        return $this->categorias->getCategorias();
        break;
      // case 'DELETE': // eliminar
      //   if(count($this->args) > 0) return $this->categoria->borrarTarea($this->args[0]);
      //   break;
      case 'POST':  //guardar
        if(isset($_POST['categoria'])) return $this->categoria->agregarCategoria($_POST['categoria']);
        break;
      // case 'PUT': // modificar
      //   if(count($this->args) > 0) return $this->categoria->realizarTarea($this->args[0]);
      //   break;
      // default:
            return 'Verbo no soportado';
        break;
    }
  }
}

?>
