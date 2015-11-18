<?php
require_once 'api_base.php';
require_once '../modelo/productos_modelo.php';

class ProductoApi extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->productos = new ProductosModelo();
  }

  function categoria(){
    switch ($this->method) {
      case 'GET': // consultar
        return $this->productos->getProductos();
        break;
      case 'DELETE': // eliminar
        if(count($this->args) > 0) return $this->productos->eliminarCategoria($this->args[0]);
        break;
      case 'POST':  //guardar
        if(isset($_POST['categoria'])) {
          return $this->productos->agregarProducto($_POST['idcategoria'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_FILES['imagesToUpload']);
        }
        break;
      case 'PUT': // modificar
        if(count($this->args) > 0) return $this->productos->modificarCategoria($this->args[0],$this->data->nombre);
        break;
      default:
            return 'Verbo no soportado';
        break;
    }
  }
}

?>
