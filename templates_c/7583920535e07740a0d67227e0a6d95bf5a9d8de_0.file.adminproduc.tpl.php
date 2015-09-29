<?php /* Smarty version 3.1.27, created on 2015-09-29 06:53:38
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\adminproduc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2959560a1952826a38_18339020%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7583920535e07740a0d67227e0a6d95bf5a9d8de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\adminproduc.tpl',
      1 => 1443502413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2959560a1952826a38_18339020',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560a195286b4d1_34895630',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560a195286b4d1_34895630')) {
function content_560a195286b4d1_34895630 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2959560a1952826a38_18339020';
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
        <form id="formcat">
          <div class="form-group col-md-12">
            <label for="task">Categoria</label>
            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">
          </div>
          <button type="submit" id="nuevacat"class="btn btn-primary">Agregar</button>
        </form>
      </div>

      <div class="conteiner col-md-8" id="productos">

      </div>

      <div class="row col-md-8">
         <form  action="index.php?admin=agregar_producto" method="POST" enctype="multipart/form-data">
           <div class="form-group">
             <div class="col-md-12">
               <label for="task">Producto</label>
             </div>
             <div class="col-md-2">
               <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
             </div>
             <div class="col-md-8">
               <textarea class="form-control" maxlength="5000" rows="8" id="descripcion" name="descripcion" placeholder="descripcion"></textarea>
             </div>
             <div class="col-md-2">
               <input type="text" class="form-control" id="precio" name="precio" placeholder="precio">
             </div>
             <div class="col-md-12">
              <div class="form-group col-md-2">
  					    <select id="dropcat" name="dropcat">

        				</select>
        		  </div>
                 <!-- <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Categoria
                      <span class="caret"></span>
                    </button>
                    <ul id="dropcat" class="dropdown-menu" aria-labelledby="dropdownMenu1">

                    </ul>
                  </div> -->

               <div class="form-group col-md-5 col-md-offset-5">
                 <label for="imagesToUpload">Imagenes</label>
                 <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
               </div>
             </div>

           <button type="submit" id="nuevoproducto" class="btn btn-primary col-md-2 col-md-offset-2">Agregar</button>
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