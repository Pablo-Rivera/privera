<?php
  include_once 'libs/Smarty.class.php';
  class NavVista{
    private $smarty;
    private $errores;

  function __construct(){
    $this->smarty = new Smarty();
    $this->errores = array();

    $this->smarty->assign('title',"AUTOS");
    $this->smarty->assign('tareas',$productos);
    $this->smarty->assign('caracteristicas',$carac);
  }

  function mostrar($accion){
    $this->smarty->display($accion .'.tpl');
  }
  function agregarCat($accion){
  }


  }
 ?>
