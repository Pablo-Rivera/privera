<?php
  include_once 'configuracion/config_app.php';

  include_once 'controlador/nav_controlador.php';

  $navControler = new NavControlador();

  if(!array_key_exists(ConfigApp::$NAV,$_REQUEST))
  {
    $navControler->mostrarAccionNav(ConfigApp::$NAV_DEFAULT);
  }
  else
  {
    $navControler->mostrarAccionNav($_REQUEST[ConfigApp::$NAV]);
  }
  // elseif ( $_REQUEST["accion"] === "postres" )
  // {
  //   $templateEngine->display('postres.tpl');
  // }
  // elseif ($_REQUEST["accion"] === "sabores")
  // {
  //   $templateEngine->display('sabores.tpl');
  // }
  // elseif ($_REQUEST["accion"] === "encargues")
  // {
  //   $templateEngine->display('encargues.tpl');
  // }
  // elseif ($_REQUEST["accion"] === "juego")
  // {
  //   $templateEngine->display('juego.tpl');
  // }

?>
