<?php
  include_once 'controlador/base_controlador.php';
  include_once 'controlador/admin_controlador.php';

  class NavControlador extends BaseControlador{

    private $adminprod;

  function __construct(){
    parent::__construct();
    $this->adminprod = new AdminControlador();
  }

  function mostrarAccion($accion){
    $this->vista->mostrar($accion);
  }

  function mostrarAdminProd($accion){
    $this->adminprod->mostrarAdminProd($accion);
  }

  }
 ?>
