<?php /* Smarty version 3.1.27, created on 2015-10-02 02:31:18
         compiled from "C:\xampp\htdocs\Web 2\privera--vieja\templates\verproducto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24742560dd05682a744_80430390%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '716274beafa0208616c40b4d11a29ac1c1c9bae2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera--vieja\\templates\\verproducto.tpl',
      1 => 1443745866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24742560dd05682a744_80430390',
  'variables' => 
  array (
    'producto' => 0,
    'key' => 0,
    'atributo' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560dd05689ce56_44266255',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560dd05689ce56_44266255')) {
function content_560dd05689ce56_44266255 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24742560dd05682a744_80430390';
?>

<label id="tituloP"class="control-label col-sm-7 col-sm-offset-5" for="nombre">Producto</label>
<div class="col-sm-10 col-sm-offset-1">
  <?php
$_from = $_smarty_tpl->tpl_vars['producto']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['atributo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['atributo']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['atributo']->value) {
$_smarty_tpl->tpl_vars['atributo']->_loop = true;
$foreach_atributo_Sav = $_smarty_tpl->tpl_vars['atributo'];
?>
    <?php if ($_smarty_tpl->tpl_vars['key']->value === "descripcion") {?>
      <ul class="list-group-item col-sm-8">
        <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

      </ul>
    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value === "imagenes") {?>
      <ul class="list-group-item col-sm-8 col-sm-offset-2">
        <?php
$_from = $_smarty_tpl->tpl_vars['atributo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
          <img class="col-sm-4"src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="no se cargo imagen" />
        <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
      </ul>
    <?php } else { ?>
      <ul class="list-group-item col-sm-1">
        <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

      </ul>
    <?php }?>
  <?php
$_smarty_tpl->tpl_vars['atributo'] = $foreach_atributo_Sav;
}
?>
</div>
<?php }
}
?>