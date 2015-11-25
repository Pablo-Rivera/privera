<?php
require_once 'categoria_api.php';
require_once 'producto_api.php';

session_start();
if(isset($_SESSION['tiempo']) ) {
$vida_session = time() - $_SESSION['tiempo'];
    if($vida_session > $_SESSION['tiempoExpi'])
    {
        session_destroy();
    }
}
if (isset($_SESSION['email'])){
  $url_elements = explode('/', rtrim($_REQUEST['parametros'], '/'));
  if(count($url_elements)>0){
    $api_name = ucfirst($url_elements[0]) . 'Api';
    if (!($api_name == 'Api') && class_exists($api_name)) {
        $api = new $api_name($_REQUEST['parametros']);
        echo $api->processAPI();
        return;
    }
  }
  echo "No endpoint ".$url_elements[0];
}
else {
  header("HTTP/1.1 " . 403 . " " . "session expirada");
  echo  "session expirada";
}

?>
