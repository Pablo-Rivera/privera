<?php
  include_once 'libs/Smarty.class.php';

  class BaseVista{
    protected $smarty;
    protected $errores;

  function __construct(){
    $this->smarty = new Smarty();
    $this->errores = array();
  }

  function mostrar($accion){
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->display($accion .'.tpl');
  }

}
?>
