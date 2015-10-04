<?php /* Smarty version 3.1.27, created on 2015-10-02 01:42:08
         compiled from "C:\xampp\htdocs\Web 2\privera--vieja\templates\categorias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16861560dc4d0741c13_69688939%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3d4de26fce2d2707e057fa83db79449f424f87e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera--vieja\\templates\\categorias.tpl',
      1 => 1443621898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16861560dc4d0741c13_69688939',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560dc4d09a04b1_79428118',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560dc4d09a04b1_79428118')) {
function content_560dc4d09a04b1_79428118 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16861560dc4d0741c13_69688939';
?>
<label class="control-label" for="nombre">Categorias</label>
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
  <ul class="list-group col-sm-12">
    <ul class="list-group-item col-sm-1 col-sm-offset-1">
      <?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>

    </ul>

    <ul class="list-group-item col-sm-6 col-sm-offset-1">
      <?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>

    </ul>
  </ul>
<?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}

}
}
?>