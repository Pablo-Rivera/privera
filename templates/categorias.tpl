<label class="control-label" for="nombre">Categorias</label>
{foreach $categorias as $categoria}
  <ul class="list-group col-sm-12">
    <ul class="list-group-item col-sm-1 col-sm-offset-1">
      {$categoria["id_categoria"]}
    </ul>

    <ul class="list-group-item col-sm-6 col-sm-offset-1">
      {$categoria["nombre"]}
    </ul>
  </ul>
{/foreach}
