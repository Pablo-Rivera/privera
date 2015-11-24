<?php
  include_once 'controlador/base_controlador.php';

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
    }
  }
}
?>
