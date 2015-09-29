<label class="control-label" for="nombre">Productos</label>
{foreach $productos as $producto}
  <ul class="list-group col-md-12">
    {foreach $producto as $key => $atributo}
      {if $key === "descripcion"}
        <ul class="list-group-item col-md-4">
          {$atributo}
        </ul>
      {elseif $key === "imagenes" }
        <ul class="list-group-item col-md-2">
          <img src="{$atributo}" alt="no se cargo imagen" />
        </ul>
      {elseif $key === "nombre" }
        <ul class="list-group-item col-md-2">
          {$atributo}
        </ul>
      {else}
        <ul class="list-group-item col-md-1">
          {$atributo}
        </ul>
      {/if}
    {/foreach}
    <button class="btn btn-primary ver" value="{$producto.id_producto}"type="button" name="ver">Ver</button>
    <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="{$producto['id_producto']}"></a>
  </ul>
{/foreach}

<script src="js/imagenajax.js"></script>
