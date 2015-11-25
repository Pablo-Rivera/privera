

    <div class="col-sm-10 col-sm-offset-1">
      <div class="page-header">
      <span class="pull-right">Hola <strong>{$usuario}</strong>! - <a id="logout">Logout</a></span>
       <h1>Lista de Productos</h1>
      </div>

      <div class="col-sm-9">
        <div class="conteiner col-sm-12" id="productos">
            <label class="control-label" for="nombre">Productos</label>
            <!-- Lista los productos -->
        </div>

        <div class="row col-sm-12">
          <form id="formprod" >
            <div class="form-group">
               <div class="col-sm-12">
                 <label for="task">Producto</label>
               </div>
               <div class="col-sm-2">
                 <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
               </div>
               <div class="col-sm-8">
                 <textarea class="form-control" maxlength="254" rows="3" id="descripcion" name="descripcion" placeholder="descripcion"></textarea>
               </div>
               <div class="col-sm-2">
                 <input type="text" class="form-control" id="precio" name="precio" placeholder="precio">
               </div>
               <div class="col-sm-12">
                  <div class="form-group col-sm-2">
      					    <select id="dropcat" name="dropcat">
                        <option value="0">Categorias</option>
                        <!-- categorias -->
            				</select>
            		  </div><br>

                  <span class="file-input btn btn-primary btn-file">
                    Cargar&hellip; <input class="cargar form-group col-sm-1 col-sm-offset-3" type="file"  id="imagesToUpload" name="imagesToUpload[]" multiple/>
                  </span>

                  <button type="submit" id="nuevoproducto" class="btn btn-primary col-sm-2 col-sm-offset-1">Agregar</button>
                </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-sm-3 catadmin">
        <div  id="categoria">
          <label class="control-label" for="nombre">Categorias</label>
          <!-- lista las categorias -->
        </div>
        <form id="formcat">
          <div class="form-group col-sm-12">
            <label for="task">Categoria</label>
            <input type="text" class="form-control" id="categoriaf" name="categoria" placeholder="Categoria">
          </div>
          <button type="submit" id="nuevacat"class="btn btn-primary">Agregar</button>
        </form>
      </div>

<!-- MODAL PRODUCTO -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content  col-sm-12">
          <div class="modal-header col-sm-12">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel">Modifique el Producto:</h4>
          </div>
          <div class="modal-body col-sm-12">
            <div class="form-group col-sm-3">
              <select id="dropcatm" name="dropcatm">
                <option value="0">Categorias</option>
                <!-- categorias -->
              </select>
            </div>
            <div class="col-sm-3  col-sm-offset-1">
             <input type="text" class="form-control" id="updatenombre" name="nombre" placeholder="nombre">
            </div>
            <div class="col-sm-3 col-sm-offset-1">
             <input type="text" class="form-control" id="updateprecio" name="precio" placeholder="precio">
            </div>
            <div class="col-sm-12">
             <textarea class="form-control" maxlength="254" rows="3" id="updatedescripcion" name="descripcion" placeholder="descripcion"></textarea>
            </div>
          </div>
          <div class="modal-footer col-sm-12">
            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            <button type="button" class="btn btn-primary" id="Prodmodificado" name="Prodmodificado" data-dismiss="modal">Guardar cambios</button>
          </div>
       </div>
     </div>
    </div>

    <!-- MODAL CATEGORIA -->
    <div class="modal fade" id="myModalC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel">Modifique el nombre de la categoria:</h4>
         </div>
         <input id="updatecat" name="name" value="">
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
           <button type="button" class="btn btn-primary" id="nuevoNombreCat" name="nuevoNombreCat" data-dismiss="modal">Guardar cambio</button>
         </div>
       </div>
     </div>
    </div>
        <div class="col-xs-5">
          <form id="imgAjax">
            <input class="col-xs-1" type="file"  id="imagesToUpload2" name="imagesToUpload2[]" multiple/>
          </form>
        </div>
    <!--  -->
    <script src="js/mustache.js"></script>
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/listproductos.js"></script>
    <script src="js/dropcat.js"></script>
    <script src="js/login.js"></script>
