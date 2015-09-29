<table class="table  col-md-10" >
  <thead><!--Titulos de la tabla-->
    <tr class="row">
      <th class="col-md-1">Nombre</th>
      <th class="col-md-1">Categoria</th>
      <th class="col-md-3">Descripcion</th>
      <th class="col-md-1">Precio</th>
      <th class="col-md-2">Imagen</th>
    </tr>
  </thead>
  <tbody >
    {foreach $productos as $producto}
    <tr class="row">
      {foreach $producto as $key => $atributo}
      {if $key!=="id_producto" }
        {if $key === "imagenes" }
          <td class="col-md-2">
            <img src="{$atributo}" alt="no se cargo imagen" />
          </td>
        {elseif $key === "descripcion"}
          <td class="col-md-3">
            {$atributo}
          </td>
        {else}
          <td class="col-md-1">
            {$atributo}
          </td>
        {/if}
      {/if}
      {/foreach}
    </tr>
    {/foreach}
  </tbody>
  <br>
</table>
