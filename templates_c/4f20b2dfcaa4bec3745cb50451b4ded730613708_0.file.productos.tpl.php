<?php /* Smarty version 3.1.27, created on 2015-09-29 12:59:47
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\productos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9121560a6f238b3c88_39411674%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f20b2dfcaa4bec3745cb50451b4ded730613708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\productos.tpl',
      1 => 1443524379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9121560a6f238b3c88_39411674',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
    'key' => 0,
    'atributo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560a6f2392a094_49122465',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560a6f2392a094_49122465')) {
function content_560a6f2392a094_49122465 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9121560a6f238b3c88_39411674';
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
        <ul class="list-group-item col-md-4">
          <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['key']->value === "imagenes") {?>
        <ul class="list-group-item col-md-2">
          <img src="<?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>
" alt="no se cargo imagen" />
        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['key']->value === "nombre") {?>
        <ul class="list-group-item col-md-2">
          <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

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
    <button class="btn btn-primary ver" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"type="button" name="ver">Ver</button>
    <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="index.php?admin=agregar_imagenes&id_task=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"></a>
  </ul>
<?php
$_smarty_tpl->tpl_vars['producto'] = $foreach_producto_Sav;
}
?>

<?php echo '<script'; ?>
 src="js/imagenajax.js"><?php echo '</script'; ?>
>
<?php }
}
?>