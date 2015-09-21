<?php /* Smarty version 3.1.27, created on 2015-09-21 21:31:11
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\juego.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:521756005aff592b27_64305517%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e095a10435f4d1d303708106743085332b6ecada' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\juego.tpl',
      1 => 1442861135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521756005aff592b27_64305517',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56005aff5cbea8_60450450',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56005aff5cbea8_60450450')) {
function content_56005aff5cbea8_60450450 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '521756005aff592b27_64305517';
?>
<div class="container">
    <div class="col-lg-3 col-xs-4">
        <h1 >Jugador 1</h1>
        <br/>
      <p>
        <button id="but1" type="button" class="btn btn-lg btn-success"  >Tirar Dados</button>
        </p>
        <br/><br/>
        <table class="table">
      <tr>
        <td>PUNTOS</td>
      </tr>
      <tbody>
            <tr>
                <td id="jugador1">0</td>
        </tr>
      </tbody>
  </table>
    </div>


    <div class="col-lg-2 col-lg-offset-2 col-xs-4">
        <div class="row col-lg-12"></div>
        <img class="row col-lg-12 col-xs-10 col-xs-offset-1" id="dado1" src="images/dado1.png">
        <img class="row col-lg-12 col-xs-10 col-xs-offset-1" id="dado2" src="images/dado1.png">
        <button id="comenzar" type="button"  class="row col-lg-11 row col-lg-offset-1 btn btn-success" >EMPEZAR AHORA</button>
    </div>

    <div id="player2" class="col-lg-3 col-lg-offset-2 col-xs-4">
        <h1>Jugador 2</h1>
        <br/>
      <p>
        <button  id="but2" type="button" class="btn btn-lg btn-success" >Tirar Dados</button>
      </p>
        <br/><br/>
        <table class="table">
      <tr>
        <td>PUNTOS</td>
      </tr>
      <tbody>
        <tr>
          <td id="jugador2">0</td>
        </tr>
      </tbody>
  </table>
</div>
</div>

    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/juego.js "><?php echo '</script'; ?>
>
<?php }
}
?>