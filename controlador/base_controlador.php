<?php
  include_once 'configuracion/config_app.php';
  include_once 'configuracion/config_admin.php';

  include_once 'vista/nav_vista.php';
  include_once 'modelo/productos_modelo.php';
  include_once 'modelo/categoria_modelo.php';

  class BaseControlador{
    protected $vista;

  function __construct(){
    $this->vista = new NavVista();
  }

  }
 ?>
