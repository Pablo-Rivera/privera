<?php
  require_once 'libs/Smarty.class.php';
  require_once 'base_vista.php';

  class NavVista extends BaseVista{

  function mostrarAdmin($accion, $usuario){
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->assign('usuario', $usuario);
    $this->mostrar($accion);
  }

  function mostrarProductos($accion,$productos,$categorias){
    $this->smarty->assign('productos', $productos);
    $this->smarty->assign('categorias', $categorias);
    $this->mostrar($accion);
  }

  function mostrarCategorias($accion,$categorias){
    $this->smarty->assign('categorias', $categorias);
    $this->mostrar($accion);
  }

  function mostrarProducto($accion,$producto){
    $this->smarty->assign('producto', $producto);
    $this->mostrar($accion);
  }

}
 ?>
