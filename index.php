<?php
  require_once 'configuracion/config_app.php';

  require_once 'controlador/nav_controlador.php';


  $navControler = new NavControlador();

  if(!array_key_exists(ConfigApp::$NAV,$_REQUEST))
  {
    $navControler->mostrarAccion(ConfigApp::$NAV_DEFAULT);
  }
  elseif ($_REQUEST[ConfigApp::$NAV]===ConfigApp::$NAV_VER_PRODUCTO) {
    $navControler->verProducto(ConfigApp::$NAV_VER_PRODUCTO);
  }
  elseif (ConfigApp::$NAV_VER_PROD===$_REQUEST[ConfigApp::$NAV]){
    $navControler->mostrarProductos(ConfigApp::$NAV_VER_PROD);
  }
  else
  {
    $navControler->mostrarAccion($_REQUEST[ConfigApp::$NAV]);//juego postre sabores encargues contactos
  }


?>
