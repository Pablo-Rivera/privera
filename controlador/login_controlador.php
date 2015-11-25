<?php
require_once 'vista/base_vista.php';
require_once 'modelo/login_modelo.php';

class LoginControlador {

  private $modelo;
  private $vista;

  function __construct() {
    $this->modelo = new LoginModelo();
    $this->vista = new BaseVista();
  }

  function login(){
    if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
      $pass = $this->modelo->getPassword($_REQUEST['email']);
      if(sha1($_REQUEST['password'])==$pass['password']){
        session_start();
        $_SESSION['tiempo'] = time();
        $_SESSION['tiempoExpi']=600;
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

  function verificarsession(){
    session_start();
    if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $_SESSION['tiempoExpi'])
        {
            session_destroy();
        }
    }
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: admin.php?action=login");
    die();
  }

}

?>
