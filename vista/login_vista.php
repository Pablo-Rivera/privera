<?php
include_once 'libs/Smarty.class.php';
include_once 'base_vista.php';

class LoginVista extends BaseVista{

  function mostrarError($error){
    array_push($this->errores, $error);
  }
}
?>
