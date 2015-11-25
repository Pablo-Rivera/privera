<?php
  require_once 'controlador/base_controlador.php';
  require_once 'controlador/admin_controlador.php';
  require_once 'modelo/Mail_modelo.php';
  require_once 'modelo/Categoria_modelo.php';
  require_once 'modelo/Productos_modelo.php';

  class NavControlador extends BaseControlador{

    private $adminprod;

  function __construct(){
    $this->productos = new ProductosModelo();
    $this->categorias = new CategoriaModelo();

    parent::__construct();
  }

  function mandarMail(){
      $cabeceras = 'From: '.$_REQUEST['email'] . phpversion();
      if (mail("paliyo@gmail.com", "asunto ".$_REQUEST['inconveniente'], $_REQUEST['comentario'],$cabeceras))
        echo "success";
  }

  function mostrarProductos($accion){
    if(!isset($_REQUEST['id'])){
      $this->vista->mostrarProductos($accion,$this->productos->getProductos(),$this->categorias->getCategorias());
    }else {
      $this->vista->mostrarProductos($accion,$this->productos->getProductos($_REQUEST['id']),$this->categorias->getCategorias());
    }
  }

  function  verProducto($accion){
    if(isset($_REQUEST['id_producto'])){
      $this->vista->mostrarProducto($accion,$this->productos->getProducto($_REQUEST['id_producto']));
    }
  }

  }
 ?>
