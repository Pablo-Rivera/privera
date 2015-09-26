<?php
  include_once 'vista/nav_vista.php';
  class NavControlador{
    private $vista;

  function __construct(){
    $this->vista = new NavVista();
  }

  function mostrarAccionNav($accion){
    $this->vista->mostrar($accion);
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
