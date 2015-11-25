<div class="col-sm-3 col-sm-offset-4">
  <select id="id_categoriad" name="id_categoriad" class="form-control">
  	<option selected disabled>Seleccione Para Filtrar Por Categoria</option>
  	{if !empty($categorias)}
  	  <option value="0">Todas</option>
  		{foreach $categorias as $categoria}
  			<option value="{$categoria.id_categoria}">{$categoria.nombre}</option>
  		{/foreach}
  	{else}
  		<option value="" disabled>No Existen Categorias</option>
  	{/if}
  </select>
</div>
<table class="table  col-sm-10" >
    <thead><!--Titulos de la tabla-->
      <tr class="row">
        <th class="col-sm-1">Categoria</th>
        <th class="col-sm-1">Nombre</th>
        <th class="col-sm-3">Descripcion</th>
        <th class="col-sm-1">Precio</th>
        <th class="col-sm-2">Imagen</th>
      </tr>
    </thead>
    <tbody>
      {if !empty($productos)}
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
      {else}
        <tr class="row ">
          <td class="col-sm-1">
          </td>
          <td class="col-sm-1">
          </td>
          <td class="col-sm-3">
            <h3>No hay productos asignados a esta categoria</h3>
          </td>
        </tr>
      {/if}
    </tbody>
    <br>
</table>

<script src="js/productoajax.js"></script>
