<?php
  include_once 'controlador/base_controlador.php';
  include_once 'controlador/admin_controlador.php';

  class NavControlador extends BaseControlador{

    private $adminprod;

  function __construct(){
    $this->productos = new ProductosModelo();
    $this->categorias = new CategoriaModelo();

    parent::__construct();
  }

  function mostrarProductos($accion){
    $this->vista->mostrarProductos($accion,$this->productos->getProductos());
  }

  function  verProducto($accion){
    if(isset($_REQUEST['id_producto'])){
      $this->vista->mostrarProducto($accion,$this->productos->getProducto($_REQUEST['id_producto']));
    }
  }

  }
 ?>
