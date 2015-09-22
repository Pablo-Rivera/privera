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
  //
  // function mostrarHome(){
  //   $this->smarty->display('home.tpl');
  // }
  //
  // function mostrarPostres(){
  //   $this->smarty->display('postres.tpl');
  // }
  //
  // function mostrarSabores(){
  //   $this->smarty->display('sabores.tpl');
  // }
  //
  // function mostrarEncargues(){
  //   $this->smarty->display('encargues.tpl');
  // }
  //
  // function mostrarEncargues(){
  //   $this->smarty->display('juego.tpl');
  // }

  }
 ?>
