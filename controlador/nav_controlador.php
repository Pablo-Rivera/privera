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

  }
 ?>
