
<label id="tituloP"class="control-label col-sm-7 col-sm-offset-5" for="nombre">Producto</label>
<div class="col-sm-10 col-sm-offset-1">
  {foreach $producto as $key => $atributo}
    {if $key === "descripcion"}
      <ul class="list-group-item col-sm-8">
        {$atributo}
      </ul>
    {elseif $key === "imagenes" }
      <ul class="list-group-item col-sm-8 col-sm-offset-2">
        {foreach $atributo as $imagen}
          <img class="col-sm-4"src="{$imagen}" alt="no se cargo imagen" />
        {/foreach}
      </ul>
    {else}
      <ul class="list-group-item col-sm-1">
        {$atributo}
      </ul>
    {/if}
  {/foreach}
</div>
