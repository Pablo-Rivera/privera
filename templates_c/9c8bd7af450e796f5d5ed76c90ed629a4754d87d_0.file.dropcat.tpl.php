<?php /* Smarty version 3.1.27, created on 2015-09-27 16:19:05
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\dropcat.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165385607fad9972844_77450365%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c8bd7af450e796f5d5ed76c90ed629a4754d87d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\dropcat.tpl',
      1 => 1443363544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165385607fad9972844_77450365',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5607fad9a38e11_76935945',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5607fad9a38e11_76935945')) {
function content_5607fad9a38e11_76935945 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '165385607fad9972844_77450365';
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
  <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>
</a></li>
<?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}

}
}
?>