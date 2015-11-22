<?php
require_once 'categoria_api.php';
require_once 'producto_api.php';

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
?>
