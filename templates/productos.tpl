<label class="control-label" for="nombre">Productos</label>
{foreach $productos as $producto}
  <ul class="list-group col-sm-12">
    {foreach $producto as $key => $atributo}
      {if $key === "descripcion"}
        <ul class="list-group-item col-sm-4">
          {$atributo}
        </ul>
      {elseif $key === "imagenes" }
        <ul class="list-group-item col-sm-2">
          <img src="{$atributo}" alt="no se cargo imagen" />
        </ul>
      {elseif $key === "nombre" }
        <ul class="list-group-item col-sm-2">
          {$atributo}
        </ul>
      {else}
        <ul class="list-group-item col-sm-1">
          {$atributo}
        </ul>
      {/if}
    {/foreach}
    <a class="glyphicon glyphicon-trash eliminar" href="{$producto['id_producto']}"></a>
    <a class="glyphicon glyphicon-eye-open ver" href="{$producto['id_producto']}"></a>
    <a class="glyphicon glyphicon-picture botonAgregarImagenes" href="{$producto['id_producto']}"></a>
  </ul>
{/foreach}

<script src="js/imagenajax.js"></script>
