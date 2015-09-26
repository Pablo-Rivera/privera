<?php /* Smarty version 3.1.27, created on 2015-09-26 13:24:08
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\end.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4245606805854e084_67181237%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac7fb364d16a5c89399b22ea82d57879190cf905' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\end.tpl',
      1 => 1443266416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4245606805854e084_67181237',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56068058555a98_57912584',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56068058555a98_57912584')) {
function content_56068058555a98_57912584 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4245606805854e084_67181237';
?>
  </div>

  <div class="row col-md-8">
     <form  action="index.php?action=agregar_tarea" method="POST" enctype="multipart/form-data">
       <div class="form-group">
         <div class="col-md-12">
           <label for="task">Producto</label>
         </div>
         <div class="col-md-3">
           <input type="text" class="form-control" id="task" name="task" placeholder="nombre">
         </div>
         <div class="col-md-7">
           <input type="text" class="form-control" id="task" name="task" placeholder="descripcion">
         </div>
         <div class="col-md-2">
           <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Categoria
                <span class="caret"></span>
              </button>
              <ul id="dropcat" class="dropdown-menu" aria-labelledby="dropdownMenu1">

              </ul>
            </div>
         </div>
        </div>

       <div class="form-group">
         <label for="imagesToUpload">Imagenes</label>
         <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
       </div>

       <button type="submit" class="btn btn-default">Agregar</button>
     </form>
  </div>
 </div>
 <?php echo '<script'; ?>
 src="js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="js/dropcat.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>