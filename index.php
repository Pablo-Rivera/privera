<?php
  require('libs/Smarty.class.php');
  $templateEngine = new Smarty();
  $templateEngine->debugging = false;

  if(!array_key_exists("accion",$_REQUEST))
  {
    $templateEngine->display('inicio.tpl');
  }
  elseif ( $_REQUEST["accion"] === "home" )
  {
    $templateEngine->display('home.tpl');
  }
  elseif ( $_REQUEST["accion"] === "postres" )
  {
    $templateEngine->display('postres.tpl');
  }
  elseif ($_REQUEST["accion"] === "sabores")
  {
    $templateEngine->display('sabores.tpl');
  }
  elseif ($_REQUEST["accion"] === "encargues")
  {
    $templateEngine->display('encargues.tpl');
  }
  elseif ($_REQUEST["accion"] === "juego")
  {
    $templateEngine->display('juego.tpl');
  }

?>
