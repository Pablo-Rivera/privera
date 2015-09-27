<?php
  include_once 'configuracion/config_app.php';

  include_once 'controlador/nav_controlador.php';


  $navControler = new NavControlador();

  if(!array_key_exists(ConfigApp::$NAV,$_REQUEST))
  {
    if(array_key_exists("admin",$_REQUEST))
    {
      $navControler->mostrarAdmin($_REQUEST["admin"]);
    }
    else{
      $navControler->mostrarAccionNav(ConfigApp::$NAV_DEFAULT);
    }
  }
  elseif ("admin"===$_REQUEST[ConfigApp::$NAV]){
    $navControler->mostrarAccionNav("adminproduc");
  }
  else
  {
    $navControler->mostrarAccionNav($_REQUEST[ConfigApp::$NAV]);
  }


?>
