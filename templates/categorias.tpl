<label class="control-label" for="nombre">Categorias</label>
{foreach $categorias as $categoria}
  <ul class="list-group col-md-12">
    <ul class="list-group-item col-md-1 col-md-offset-1">
      {$categoria["id_categoria"]}
    </ul>

    <ul class="list-group-item col-md-6 col-md-offset-1">
      {$categoria["nombre"]}
    </ul>
  </ul>
{/foreach}
