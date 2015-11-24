<?php
  include_once 'configuracion/config_admin.php';

  include_once 'controlador/nav_controlador.php';
  include_once 'controlador/login_controlador.php';

  if(!array_key_exists(ConfigAdmin::$ACTION,$_REQUEST))
  {
    $adminControler = new AdminControlador();
    $adminControler->mostrarAccion(ConfigAdmin::$ADMIN_PROD);
  }
  else if($_REQUEST[ConfigAdmin::$ACTION]===ConfigAdmin::$ADMIN_LOGIN){
    $loginControlador = new LoginControlador();
    $loginControlador->login();
  }


?>
