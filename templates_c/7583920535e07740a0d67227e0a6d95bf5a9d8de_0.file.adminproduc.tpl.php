<?php /* Smarty version 3.1.27, created on 2015-09-27 20:27:40
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\adminproduc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:50305608351c202fb3_77969936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7583920535e07740a0d67227e0a6d95bf5a9d8de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\adminproduc.tpl',
      1 => 1443378407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50305608351c202fb3_77969936',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5608351c23c343_07093633',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5608351c23c343_07093633')) {
function content_5608351c23c343_07093633 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '50305608351c202fb3_77969936';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/logo.png" type="image/png" />

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Los Andes</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="col-md-10 col-md-offset-1">
      <div class="page-header">
       <h1>Lista de Productos</h1>
      </div>

      <div class="col-md-4 catadmin">
        <div  id="categoria">
          <!-- lista las categorias -->
        </div>
        <form>
          <div class="form-group col-md-12">
            <label for="task">Categoria</label>
            <input type="text" class="form-control" id="newcat" name="cat" placeholder="Categoria">
          </div>
          <button type="submit" id="nuevacat"class="btn btn-primary">Agregar</button>
        </form>
      </div>

      <div class="conteiner col-md-8" id="productos">

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

           <button type="submit" id="nuevoproducto" class="btn btn-primary">Agregar</button>
         </form>
      </div>
    </div>

    <?php echo '<script'; ?>
 src="js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/listproductos.js"><?php echo '</script'; ?>
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