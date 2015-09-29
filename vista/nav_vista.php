<?php
  include_once 'libs/Smarty.class.php';
  class NavVista{
    private $smarty;
    private $errores;

  function __construct(){
    $this->smarty = new Smarty();
    $this->errores = array();

  }

  function mostrar($accion){
    $this->smarty->display($accion .'.tpl');
  }

  function mostrarAdminProd($accion,$productos){//cuidado con los AJAX
    $this->smarty->assign('productos', $productos);
    $this->mostrar($accion);
  }

  function mostrarAdminCat($accion,$categorias){//cuidado con los AJAX
    $this->smarty->assign('categorias', $categorias);
    $this->mostrar($accion);
  }

  function mostrarError($error){
    array_push($this->errores, $error);
  }

  function agregarCat($accion){
  }


  }
 ?>
