<?php /* Smarty version 3.1.27, created on 2015-10-02 01:42:08
         compiled from "C:\xampp\htdocs\Web 2\privera--vieja\templates\dropcat.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1236560dc4d07bbd31_51637535%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64215947528793f1cd1f16d8638015ad1379a52b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera--vieja\\templates\\dropcat.tpl',
      1 => 1443621898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236560dc4d07bbd31_51637535',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560dc4d09a41b1_99182519',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560dc4d09a41b1_99182519')) {
function content_560dc4d09a41b1_99182519 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1236560dc4d07bbd31_51637535';
if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
  <option value="0">Categorias</option>
  <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>
">
    <?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>

    </option>
  <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
<?php } else { ?>
  <option value="0">No Existen Categorias</option>
<?php }

}
}
?>