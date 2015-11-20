<?php
  include_once 'configuracion/config_app.php';
  include_once 'configuracion/config_admin.php';

  include_once 'controlador/nav_controlador.php';
  include_once 'controlador/admin_controlador.php';


  $navControler = new NavControlador();
  $adminControler = new AdminControlador();

  if(!array_key_exists(ConfigApp::$NAV,$_REQUEST))
  {
    if(array_key_exists(ConfigAdmin::$ADMIN,$_REQUEST))//Acciones del administrador
    {
      if($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_PRODUCTOS ){
        $adminControler->mostrarAdminProd($_REQUEST[ConfigAdmin::$ADMIN]);
      }
      elseif($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_ADD_PROD) {
        $adminControler->agregarProducto();
      }
      elseif ($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_ADD_IMG) {
        $adminControler->agregarImagenes();
      }
      elseif ($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_ELIMINAR_PROD) {
        $adminControler->eliminarProducto();
      }
      elseif ($_REQUEST[ConfigAdmin::$ADMIN]===ConfigAdmin::$ADMIN_PRODUCTO) {
        $adminControler->verProducto(ConfigAdmin::$ADMIN_PRODUCTO);
      }
    }
    else{
      $navControler->mostrarAccion(ConfigApp::$NAV_DEFAULT);
    }
  }
  elseif ($_REQUEST[ConfigApp::$NAV]===ConfigAdmin::$ADMIN){//nav=admin
    $navControler->mostrarAccion(ConfigApp::$NAV_ADMIN);//va a la pagina administracion
  }
  elseif (ConfigApp::$NAV_VER_PROD===$_REQUEST[ConfigApp::$NAV]){
    $navControler->mostrarAdminProd(ConfigApp::$NAV_VER_PROD);
  }
  else
  {
    $navControler->mostrarAccion($_REQUEST[ConfigApp::$NAV]);//juego postre sabores encargues contactos
  }


?>
