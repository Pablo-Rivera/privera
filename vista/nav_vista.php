<?php
  include_once 'libs/Smarty.class.php';
  include_once 'base_vista.php';

  class NavVista extends BaseVista{

  function mostrarProductos($accion,$productos){
    $this->smarty->assign('productos', $productos);
    $this->mostrar($accion);
  }

  function mostrarCategorias($accion,$categorias){
    $this->smarty->assign('categorias', $categorias);
    $this->mostrar($accion);
  }

  function mostrarError($error){
    array_push($this->errores, $error);
  }

  function mostrarProducto($accion,$producto){
    $this->smarty->assign('producto', $producto);
    $this->mostrar($accion);
  }

}
 ?>
