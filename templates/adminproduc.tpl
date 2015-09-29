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
    <form id="imgAjax" >
      <input type="file"  id="imagesToUpload2" name="imagesToUpload2[]" multiple>
    </form>
    <div class="col-md-12" id="producto">
      <div class="page-header">
       <h1>Lista de Productos</h1>
      </div>

      <div class="col-md-3 catadmin">
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

      <div class="conteiner col-md-9" id="productos">
          <!-- lista de productos -->
      </div>

      <div class="row col-md-9">
         <form id="formprod" >
           <div class="form-group">
             <div class="col-md-12">
               <label for="task">Producto</label>
             </div>
             <div class="col-md-2">
               <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
             </div>
             <div class="col-md-8">
               <textarea class="form-control" maxlength="254" rows="3" id="descripcion" name="descripcion" placeholder="descripcion"></textarea>
             </div>
             <div class="col-md-2">
               <input type="text" class="form-control" id="precio" name="precio" placeholder="precio">
             </div>
             <div class="col-md-12">
              <div class="form-group col-md-2">
  					    <select id="dropcat" name="dropcat">
                    <!-- categorias -->
        				</select>
        		  </div><br>

              <span class="file-input btn btn-primary btn-file">
                Cargar&hellip; <input class="cargar form-group col-md-1 col-md-offset-3" type="file"  id="imagesToUpload" name="imagesToUpload[]" multiple/>
              </span>

           <button type="submit" id="nuevoproducto" class="btn btn-primary col-md-2 col-md-offset-1">Agregar</button>
         </div>
       </form>
     </div>
    </div>

    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/listproductos.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropcat.js"></script>
  </body>
</html>
