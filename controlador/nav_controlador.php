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

  public function agregarCat(){
    if (array_key_exists('cat', $_REQUEST) && $_REQUEST['cat'] != null){
      // $this->modelo->agregarCat($_REQUEST['cat']);
    }
    else
      echo "No a ingresado categoria";
  }
  }
 ?>
