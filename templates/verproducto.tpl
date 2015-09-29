<label class="control-label col-md-8 col-md-offset-4" for="nombre">Producto</label>
    {foreach $producto as $key => $atributo}
      {if $key === "descripcion"}
        <ul class="list-group-item col-md-8">
          {$atributo}
        </ul>
      {elseif $key === "imagenes" }
        <ul class="list-group-item col-md-6 col-md-offset-3">
          {foreach $atributo as $imagen}
            <img class="col-md-4"src="{$imagen}" alt="no se cargo imagen" />
          {/foreach}
        </ul>
      {else}
        <ul class="list-group-item col-md-1">
          {$atributo}
        </ul>
      {/if}
    {/foreach}
