<?php
require_once 'api_base.php';
require_once '../modelo/productos_modelo.php';

class ProductoApi extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->productos = new ProductosModelo();
  }

  function producto(){
    switch ($this->method) {
      case 'GET': // consultar
        if(count($this->args) < 1){
          return $this->productos->getProductos();
        }else {
          return $this->productos->getProducto($this->args[0]);
        }
        break;
      case 'DELETE': // eliminar
        if(count($this->args) > 0 && count($this->args) < 2){
          return $this->productos->eliminarProducto($this->args[0]);
        }
        else if ($this->args[0]==="img"){
          return $this->productos->eliminarImagen($this->args[1]);
        }
        break;
      case 'POST':  //guardar
        if(count($this->args) < 1){
          if(isset($_POST['dropcat']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_FILES['imagesToUpload'])) {
            return $this->productos->agregarProducto($_POST['dropcat'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_FILES['imagesToUpload']);
        }}
        else{
          return $this->productos->agregarImagenes($this->args[1], $_FILES['imagesToUpload2']);
        }
        break;
      case 'PUT': // modificar
        if(count($this->args) > 0)
          return $this->productos->modificarProducto($this->args[0], $this->data->fk_id_categoria, $this->data->nombre, $this->data->descripcion, $this->data->precio);
        break;
      default:
            return 'Verbo no soportado';
        break;
    }
  }
}

?>
