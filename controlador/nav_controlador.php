<?php
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

  function mostrarAdmin($accion){
    if ($accion == "productos")
    {
      $this->vista->mostrarAdminProd($accion,$this->modelo->getProductos());
    }
    else {
      $this->vista->mostrarAdminCat($accion,$this->modelo->getCategorias());
    }
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

  }
 ?>
