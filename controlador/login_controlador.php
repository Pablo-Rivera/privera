<?php
include_once 'vista/base_vista.php';
include_once 'modelo/login_modelo.php';

class LoginControlador {

  private $modelo;
  private $vista;

  function __construct() {
    $this->modelo = new LoginModelo();
    $this->vista = new BaseVista();
  }

  function login(){
    //echo md5('Pass1234!@');
    if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
      $pass = $this->modelo->getPassword($_REQUEST['email']);
      print_r($pass);
      if($_REQUEST['password']==$pass['password']){// sentencia  vieja md5($_REQUEST['password'])==$pass['password']
        session_start();
        $_SESSION['email'] = $_REQUEST['email'];
        header("Location: admin.php");
        die();
      }
      else {
        $this->vista->mostrarError('Email o Password inválidos');
      }
    }

    $this->vista->mostrar('login');
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: admin.php?action=login");
    die();
  }

}

?>
