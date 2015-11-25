<?php
  require_once 'controlador/base_controlador.php';

  class AdminControlador extends BaseControlador{
    private $productos;
    private $categorias;

  function __construct(){
    $this->productos = new ProductosModelo();
    $this->categorias = new CategoriaModelo();
    parent::__construct();

    session_start();
    if (!isset($_SESSION['email'])){
      header("Location: admin.php?action=login");
      die();
    }else {
      $vida_session = time() - $_SESSION['tiempo'];
      if($vida_session > 20)
      {
          session_destroy();
      }
    }
  }



  function mostrarAdmin($accion){
      $this->vista->mostrarAdmin($accion,$_SESSION['email']);
  }
}
?>
