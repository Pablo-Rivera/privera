<label class="control-label" for="nombre">Productos</label>
{foreach $productos as $producto}
  <ul class="list-group col-md-12">
    {foreach $producto as $key => $atributo}
      {if $key === "descripcion"}
        <ul class="list-group-item col-md-6">
          {$atributo}
        </ul>
      {elseif $key === "imagenes" }
        <ul class="list-group-item col-md-2">
          <img src="{$atributo}" alt="no se cargo imagen" />
        </ul>
      {else}
        <ul class="list-group-item col-md-1">
          {$atributo}
        </ul>
      {/if}
    {/foreach}
  </ul>
{/foreach}
