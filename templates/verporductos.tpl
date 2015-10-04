<table class="table  col-sm-10" >
    <thead><!--Titulos de la tabla-->
      <tr class="row">
        <th class="col-sm-1">Nombre</th>
        <th class="col-sm-1">Categoria</th>
        <th class="col-sm-3">Descripcion</th>
        <th class="col-sm-1">Precio</th>
        <th class="col-sm-2">Imagen</th>
      </tr>
    </thead>
    <tbody>
      {foreach $productos as $producto}
      <tr class="row">
        {foreach $producto as $key => $atributo}
        {if $key!=="id_producto" }
          {if $key === "imagenes" }
            <td class="col-sm-2">
              <img src="{$atributo}" alt="no se cargo imagen" />
              <a class="glyphicon glyphicon-eye-open ver" href="{$producto['id_producto']}"></a>
            </td>
          {elseif $key === "descripcion"}
            <td class="col-sm-3">
              {$atributo}
            </td>
          {else}
            <td class="col-sm-1">
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

<script src="js/imagenajax.js"></script>
