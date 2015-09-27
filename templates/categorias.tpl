<label class="control-label" for="nombre">Productos</label>
{foreach $categorias as $categoria}
  <ul class="list-group col-md-12">
    {foreach $categoria as $key => $atributo}
      {if $key === "id_categoria"}
        <ul class="list-group-item col-md-1 col-md-offset-1">
      {else}
        <ul class="list-group-item col-md-6">
      {/if}
        {$atributo}
        </ul>
    {/foreach}
  </ul>
{/foreach}
