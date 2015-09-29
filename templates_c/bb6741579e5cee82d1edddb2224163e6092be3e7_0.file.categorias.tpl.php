<?php /* Smarty version 3.1.27, created on 2015-09-29 01:58:52
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\categorias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:226015609d43c098963_35343013%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6741579e5cee82d1edddb2224163e6092be3e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\categorias.tpl',
      1 => 1443484669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226015609d43c098963_35343013',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5609d43c0f0536_31071180',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5609d43c0f0536_31071180')) {
function content_5609d43c0f0536_31071180 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '226015609d43c098963_35343013';
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
    <ul class="list-group-item col-md-1 col-md-offset-1">
      <?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>

    </ul>
    
    <ul class="list-group-item col-md-6 col-md-offset-1">
      <?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>

    </ul>
  </ul>
<?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}

}
}
?>