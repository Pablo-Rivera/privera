<?php
require_once 'categoria_api.php';

$tareaAPI = new CategoriaApi($_REQUEST['parametros']);
echo $tareaAPI->processAPI();
?>
