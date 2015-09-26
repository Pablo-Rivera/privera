<?php /* Smarty version 3.1.27, created on 2015-09-26 13:24:08
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\dropcat.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:531356068058f18499_64267083%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c8bd7af450e796f5d5ed76c90ed629a4754d87d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\dropcat.tpl',
      1 => 1443266371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '531356068058f18499_64267083',
  'variables' => 
  array (
    'caracteristicas' => 0,
    'caractetistica' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56068059022552_01133451',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56068059022552_01133451')) {
function content_56068059022552_01133451 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '531356068058f18499_64267083';
$_from = $_smarty_tpl->tpl_vars['caracteristicas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['caractetistica'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['caractetistica']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['caractetistica']->value) {
$_smarty_tpl->tpl_vars['caractetistica']->_loop = true;
$foreach_caractetistica_Sav = $_smarty_tpl->tpl_vars['caractetistica'];
?>
  <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['caractetistica']->value['nombre'];?>
</a></li>
<?php
$_smarty_tpl->tpl_vars['caractetistica'] = $foreach_caractetistica_Sav;
}

}
}
?>