
<label id="tituloP"class="control-label col-sm-7 col-sm-offset-5" for="nombre">Producto</label>
<div class="col-sm-10 col-sm-offset-1">
  <ul class="list-group-item col-sm-3">
    {$producto["id_producto"]}
  </ul>
  <ul class="list-group-item col-sm-3">
    {$producto["fk_id_categoria"]}
  </ul>
    <ul class="list-group-item col-sm-3">
      {$producto["nombre"]}
    </ul>
  <ul class="list-group-item col-sm-3">
    {$producto["precio"]}
  </ul>
  <ul class="list-group-item col-sm-12">
    {$producto["descripcion"]}
  </ul>
  <ul class="list-group-item col-sm-12">
  {foreach $producto["imagenes"] as $imagen}
    <img class="col-sm-4"src='{$imagen["path"]}' alt="no se cargo imagen" />
  {/foreach}
  </ul>
</div>
