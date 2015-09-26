  <div class="row">

   <div class="col-md-8">
     <label class="control-label" for="nombre">Productos</label>
      {foreach $tareas as $tarea}
      <ul class="list-group col-md-12">
        {foreach $tarea as $key => $atributo}
          {if $key === "id" || $key==="precio"}
            <ul class="list-group-item col-md-1">
          {elseif $key === "descripcion"}
            <ul class="list-group-item col-md-6">
          {else}
            <ul class="list-group-item col-md-2">
          {/if}
              {$atributo}
            </ul>
               <!--  hacer qeu los dos a funcionen con ajax-->
               <!-- <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task={$tarea['id']}"></a>
               <a class="glyphicon glyphicon-ok" href="index.php?action=realizar_tarea&id_task={$tarea['id']}"></a> -->
        {/foreach}
       </ul>
      {/foreach}
   </div>

  </div>
