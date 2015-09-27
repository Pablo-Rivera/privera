<?php /* Smarty version 3.1.27, created on 2015-09-27 14:55:28
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\inicio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:39095607e740b6a0e1_61657930%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a75c66bcc33955e3c68e22558bae5d46ccb007' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\inicio.tpl',
      1 => 1443218108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39095607e740b6a0e1_61657930',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5607e7411a76e5_02772829',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5607e7411a76e5_02772829')) {
function content_5607e7411a76e5_02772829 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '39095607e740b6a0e1_61657930';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="images/logo.png" type="image/png" />

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <title>Los Andes</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header class="row">
    <div class="col-lg-1 col-lg-offset-1 col-md-1 col-md-offset-1 col-sm-1 col-sm-offset-1 col-xs-2">
      <img src="images/logo.png">
    </div>
    <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-3 col-xs-offset-1">
      <img src="images/losandes.png">
    </div>
  </header>

  <nav class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 navbar navbar-default navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" id="Home" href="">Home</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a id="postres" href="">Postres</a></li>
          <li><a id="sabores" href="">Sabores</a></li>
          <li><a id="encargues" href="">Encargues</a></li>
          <li><a id="juego" href="">Juego</a></li>
          <li data-toggle="modal" data-target="#myModal"><a href="#">Contacto</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La Empresa <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Fotos</a></li>
              <li><a href="#">Historia</a></li>
              <li><a href="#">Eventos</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Sucursal</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="row" id="cuerpo">

<!-- Contenedor para la navegacion Ajax -->

  </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content  textmodal">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tu comentario nos interesa</h4>
        </div>
        <div class="modal-body">
          <form>
            <div>
              <label>Tu nombre:</label><br />
              <input class="input long" name="name" type="text" value=""/><br /><br />
              <label>Tu email:</label><br />
              <input class="input long" name="email" type="text" value=""/><br /><br />
              <label>Razon:</label><br /><br />
              <input type="radio" name="razon" value="Horarios">Horarios atencion<br />
              <input type="radio" name="razon" value="Queja">Queja<br /><br />
              <label>Comentario:</label><br />
              <textarea class="long"name="comentario" id="" cols="52" rows="10"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
          <button type="button" class="btn btn-default">Enviar Comentario</button>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/ajax.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>