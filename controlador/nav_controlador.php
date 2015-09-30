<?php
  include_once 'configuracion/config_app.php';
  include_once 'configuracion/config_admin.php';

  include_once 'vista/nav_vista.php';
  include_once 'modelo/productos_modelo.php';
  class NavControlador{
    private $vista;
    private $modelo;

  function __construct(){
    $this->vista = new NavVista();
    $this->modelo = new ProductosModelo();
  }

  function mostrarAccionNav($accion){
    $this->vista->mostrar($accion);
  }

  function mostrarAdminProd($accion){
      $this->vista->mostrarAdminProd($accion,$this->modelo->getProductos());
  }

  function mostrarAdminCat($accion){
      $this->vista->mostrarAdminCat($accion,$this->modelo->getCategorias());
  }

  function agregarProducto(){
      if(isset($_REQUEST['dropcat']) && isset($_REQUEST['nombre']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['precio']) && isset($_FILES['imagesToUpload'])){
          $this->modelo->agregarProducto($_REQUEST['dropcat'], $_REQUEST['nombre'], $_REQUEST['descripcion'], $_REQUEST['precio'], $_FILES['imagesToUpload']);
        }
      else{
        $this->vista->mostrarError('La tarea que intenta crear esta vacia');
      }
    }

    function agregarCategoria(){
			if(isset($_REQUEST['categoria'])){
				$this->modelo->agregarCategoria($_REQUEST['categoria']);
			}
		}

    function agregarImagenes(){
    if(isset($_REQUEST['id_producto']) && isset($_FILES["imagesToUpload2"])){
      $this->modelo->agregarImagenes($_REQUEST['id_task'],$_FILES["imagesToUpload2"]);
    }else{
      echo '{ "result" :  "Faltan paramentros" }';
    }
  }
  function verProducto($accion){
      if(isset($_REQUEST['id_producto'])){
        $this->vista->mostrarProducto($accion,$this->modelo->getProducto($_REQUEST['id_producto']));
      }
  }

  function eliminarProducto(){
    if(isset($_REQUEST['id_producto'])){
      $this->modelo->eliminarProducto($_REQUEST['id_producto']);
    }
  }


  }
 ?>
