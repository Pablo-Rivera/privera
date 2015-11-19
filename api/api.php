<?php
require_once 'categoria_api.php';

$categoriaAPI = new CategoriaApi($_REQUEST['parametros']);
echo $categoriaAPI->processAPI();
?>
