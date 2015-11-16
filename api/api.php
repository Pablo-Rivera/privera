<?php
require_once 'categoria_api.php';

$tareaAPI = new TareaAPI($_REQUEST['parametros']);
echo $tareaAPI->processAPI();
?>
