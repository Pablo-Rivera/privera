<?php /* Smarty version 3.1.27, created on 2015-09-27 20:15:22
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\categorias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:278415608323aad9199_92892289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6741579e5cee82d1edddb2224163e6092be3e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\categorias.tpl',
      1 => 1443377719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278415608323aad9199_92892289',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'key' => 0,
    'atributo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5608323ab30d69_15106675',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5608323ab30d69_15106675')) {
function content_5608323ab30d69_15106675 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '278415608323aad9199_92892289';
?>
<label class="control-label" for="nombre">Productos</label>
<?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
  <ul class="list-group col-md-12">
    <?php
$_from = $_smarty_tpl->tpl_vars['categoria']->value;
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
      <?php if ($_smarty_tpl->tpl_vars['key']->value === "id_categoria") {?>
        <ul class="list-group-item col-md-1 col-md-offset-1">
      <?php } else { ?>
        <ul class="list-group-item col-md-6">
      <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

        </ul>
    <?php
$_smarty_tpl->tpl_vars['atributo'] = $foreach_atributo_Sav;
}
?>
  </ul>
<?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}

}
}
?>