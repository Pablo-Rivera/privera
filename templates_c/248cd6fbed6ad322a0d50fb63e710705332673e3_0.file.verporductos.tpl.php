<?php /* Smarty version 3.1.27, created on 2015-09-29 16:21:33
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\verporductos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29996560a9e6d891739_85445410%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '248cd6fbed6ad322a0d50fb63e710705332673e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\verporductos.tpl',
      1 => 1443536490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29996560a9e6d891739_85445410',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
    'key' => 0,
    'atributo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560a9e6d8f0d11_35796850',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560a9e6d8f0d11_35796850')) {
function content_560a9e6d8f0d11_35796850 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29996560a9e6d891739_85445410';
?>
<table class="table  col-md-10" >
  <thead><!--Titulos de la tabla-->
    <tr class="row">
      <th class="col-md-1">Nombre</th>
      <th class="col-md-1">Categoria</th>
      <th class="col-md-3">Descripcion</th>
      <th class="col-md-1">Precio</th>
      <th class="col-md-2">Imagen</th>
    </tr>
  </thead>
  <tbody >
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
    <tr class="row">
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
      <?php if ($_smarty_tpl->tpl_vars['key']->value !== "id_producto") {?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value === "imagenes") {?>
          <td class="col-md-2">
            <img src="<?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>
" alt="no se cargo imagen" />
          </td>
        <?php } elseif ($_smarty_tpl->tpl_vars['key']->value === "descripcion") {?>
          <td class="col-md-3">
            <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

          </td>
        <?php } else { ?>
          <td class="col-md-1">
            <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

          </td>
        <?php }?>
      <?php }?>
      <?php
$_smarty_tpl->tpl_vars['atributo'] = $foreach_atributo_Sav;
}
?>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['producto'] = $foreach_producto_Sav;
}
?>
  </tbody>
  <br>
</table>
<?php }
}
?>