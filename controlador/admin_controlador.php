<?php
  include_once 'controlador/base_controlador.php';

  class AdminControlador extends BaseControlador{
    private $productos;
    private $categorias;

  function __construct(){
    parent::__construct();
    $this->productos = new ProductosModelo();
    $this->categorias = new CategoriaModelo();
  }

  function mostrarAdminProd($accion){
      $this->vista->mostrarAdminProd($accion,$this->productos->getProductos());
  }

  function agregarProducto(){
    if(isset($_REQUEST['dropcat']) && isset($_REQUEST['nombre']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['precio']) && isset($_FILES['imagesToUpload'])){
        $this->productos->agregarProducto($_REQUEST['dropcat'], $_REQUEST['nombre'], $_REQUEST['descripcion'], $_REQUEST['precio'], $_FILES['imagesToUpload']);
      }
    else{
      $this->vista->mostrarError('La tarea que intenta crear esta vacia');
    }
  }

  function agregarCategoria(){
    if(isset($_REQUEST['categoria'])){
      $this->categorias->agregarCategoria($_REQUEST['categoria']);
    }
  }

  function agregarImagenes(){
    if(isset($_REQUEST['id_task']) && isset($_FILES["imagesToUpload2"])){
      $this->productos->agregarImagenes($_REQUEST['id_task'],$_FILES["imagesToUpload2"]);
    }else{
      echo '{ "result" :  "Faltan paramentros" }';
    }
  }

  function verProducto($accion){
    if(isset($_REQUEST['id_producto'])){
      $this->vista->mostrarProducto($accion,$this->productos->getProducto($_REQUEST['id_producto']));
    }
  }

  function eliminarProducto(){
    if(isset($_REQUEST['id_producto'])){
      $this->productos->eliminarProducto($_REQUEST['id_producto']);
    }
  }


  }
 ?>
