<?php
  include_once 'configuracion/config_app.php';
  include_once 'configuracion/config_admin.php';

  include_once 'controlador/nav_controlador.php';

  $navControler = new NavControlador();

  if(!array_key_exists(ConfigAdmin::$ADMIN,$_REQUEST))//Acciones del administrador
  {
    $navControler->mostrarAccion(ConfigApp::$NAV_ADMIN);//va a la pagina administracion
  }


?>
