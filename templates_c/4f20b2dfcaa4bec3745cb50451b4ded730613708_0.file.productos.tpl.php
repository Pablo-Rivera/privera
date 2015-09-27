<?php /* Smarty version 3.1.27, created on 2015-09-27 20:47:24
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\productos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15772560839bc487ab7_78789450%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f20b2dfcaa4bec3745cb50451b4ded730613708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\productos.tpl',
      1 => 1443379642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15772560839bc487ab7_78789450',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
    'key' => 0,
    'atributo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560839bc4eeaa0_54281083',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560839bc4eeaa0_54281083')) {
function content_560839bc4eeaa0_54281083 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15772560839bc487ab7_78789450';
?>
<label class="control-label" for="nombre">Productos</label>
<?php
$_from = $_smarty_tpl->tpl_vars['productos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['producto']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->_loop = true;
$foreach_producto_Sav = $_smarty_tpl->tpl_vars['producto'];
?>
  <ul class="list-group col-md-12">
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
        <ul class="list-group-item col-md-6">
          <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['key']->value === "imagenes") {?>
        <ul class="list-group-item col-md-2">
          <img src="<?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>
" alt="no se cargo imagen" />
        </ul>
      <?php } else { ?>
        <ul class="list-group-item col-md-1">
          <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

        </ul>
      <?php }?>
    <?php
$_smarty_tpl->tpl_vars['atributo'] = $foreach_atributo_Sav;
}
?>
  </ul>
<?php
$_smarty_tpl->tpl_vars['producto'] = $foreach_producto_Sav;
}

}
}
?>