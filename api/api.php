<?php
require_once 'categoria_api.php';
require_once 'producto_api.php';


$categoriaAPI = new ProductoApi($_REQUEST['parametros']);
echo $categoriaAPI->processAPI();
?>
