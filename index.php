<?php
  include_once 'configuracion/config_app.php';
  include_once 'configuracion/config_admin.php';

  include_once 'controlador/nav_controlador.php';


  $navControler = new NavControlador();

  if(!array_key_exists(ConfigApp::$NAV,$_REQUEST))
  {
    if(array_key_exists(ConfigAdmin::$ADMIN,$_REQUEST))//Acciones del administrador
    {
      if($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_PRODUCTOS ){
        $navControler->mostrarAdminProd($_REQUEST[ConfigAdmin::$ADMIN]);
      }
      elseif($_REQUEST[ConfigAdmin::$ADMIN]=== ConfigAdmin::$ADMIN_DROPDAW || $_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_CATEGORIAS) {
        $navControler->mostrarAdminCat($_REQUEST[ConfigAdmin::$ADMIN]);
      }
      elseif($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_ADD_PROD) {
        $navControler->agregarProducto();
      }
      elseif ($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_ADD_CAT){
        $navControler->agregarCategoria();
      }
      elseif ($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_ADD_IMG) {
        $navControler->agregarImagenes();
      }
      elseif ($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_ELIMINAR_PROD) {
        $navControler->eliminarProducto();
      }
      elseif ($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_PRODUCTO) {
        $navControler->verProducto($_REQUEST[ConfigAdmin::$ADMIN]);
      }
    }
    else{
      $navControler->mostrarAccionNav(ConfigApp::$NAV_DEFAULT);
    }
  }
  elseif ($_REQUEST[ConfigApp::$NAV]===ConfigAdmin::$ADMIN){
    $navControler->mostrarAccionNav(ConfigApp::$NAV_ADMIN);
  }
  elseif (ConfigApp::$NAV_VER_PROD===$_REQUEST[ConfigApp::$NAV]){
    $navControler->mostrarAdminProd(ConfigApp::$NAV_VER_PROD);
  }
  else
  {
    $navControler->mostrarAccionNav($_REQUEST[ConfigApp::$NAV]);
  }


?>
