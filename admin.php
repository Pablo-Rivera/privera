<?php
  require_once 'configuracion/config_admin.php';

  require_once 'controlador/nav_controlador.php';
  require_once 'controlador/login_controlador.php';

  if(!array_key_exists(ConfigAdmin::$ACTION,$_REQUEST))
  {
    $adminControler = new AdminControlador();
    $adminControler->mostrarAdmin(ConfigAdmin::$ADMIN_PROD);
  }
  else if($_REQUEST[ConfigAdmin::$ACTION]===ConfigAdmin::$ADMIN_LOGIN){
    $loginControlador = new LoginControlador();
    $loginControlador->login();
  }
  else if($_REQUEST[ConfigAdmin::$ACTION]===ConfigAdmin::$ADMIN_LOGOUT){
    $loginControlador = new LoginControlador();
    $loginControlador->logout();
  }

?>
