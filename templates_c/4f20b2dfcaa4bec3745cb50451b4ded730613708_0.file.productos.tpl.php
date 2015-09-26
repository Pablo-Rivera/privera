<?php /* Smarty version 3.1.27, created on 2015-09-26 13:30:06
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\productos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13223560681be46cf72_93934884%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f20b2dfcaa4bec3745cb50451b4ded730613708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\productos.tpl',
      1 => 1443267005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13223560681be46cf72_93934884',
  'variables' => 
  array (
    'tareas' => 0,
    'tarea' => 0,
    'key' => 0,
    'atributo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560681be4cc557_19513573',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560681be4cc557_19513573')) {
function content_560681be4cc557_19513573 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13223560681be46cf72_93934884';
?>
  <div class="row">

   <div class="col-md-8">
     <label class="control-label" for="nombre">Productos</label>
      <?php
$_from = $_smarty_tpl->tpl_vars['tareas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tarea'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tarea']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
$_smarty_tpl->tpl_vars['tarea']->_loop = true;
$foreach_tarea_Sav = $_smarty_tpl->tpl_vars['tarea'];
?>
      <ul class="list-group col-md-12">
        <?php
$_from = $_smarty_tpl->tpl_vars['tarea']->value;
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
          <?php if ($_smarty_tpl->tpl_vars['key']->value === "id" || $_smarty_tpl->tpl_vars['key']->value === "precio") {?>
            <ul class="list-group-item col-md-1">
          <?php } elseif ($_smarty_tpl->tpl_vars['key']->value === "descripcion") {?>
            <ul class="list-group-item col-md-6">
          <?php } else { ?>
            <ul class="list-group-item col-md-2">
          <?php }?>
              <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

            </ul>
               <!--  hacer qeu los dos a funcionen con ajax-->
               <!-- <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task=<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
"></a>
               <a class="glyphicon glyphicon-ok" href="index.php?action=realizar_tarea&id_task=<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
"></a> -->
        <?php
$_smarty_tpl->tpl_vars['atributo'] = $foreach_atributo_Sav;
}
?>
       </ul>
      <?php
$_smarty_tpl->tpl_vars['tarea'] = $foreach_tarea_Sav;
}
?>
   </div>

  </div>
<?php }
}
?>