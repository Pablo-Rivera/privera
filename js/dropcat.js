$(document).ready(function(){

  $("#formcat").submit(function(event){
    event.preventDefault();
    var nombreCat=$('#categoriaf').val();
    if(nombreCat.length >4){
      $.ajax(
          {
            method: "POST",
            url: "api/categoria",
            data: { categoria: nombreCat }
          })
        .done(function(idCategoria) {
          categoria = {id_categoria:idCategoria, nombre:nombreCat};
          crearDropdownCategoria(categoria);
          crearListCategoria(categoria);
          $('#categoriaf').val('');
        })
        .fail(function(data) {
          $('#categoria').append('<li>Imposible agregar la tarea</li>');
        });
    }
    else{
      $('#categoria').append('<li>nombre muy corto</li>');
    }
  });

  function crearDropdownCategoria(categoria) {//crea el componente html del dropdown por categoria
    $.ajax({ url: 'js/templates/dropcat.mst',
       success: function(template) {
         var rendered = Mustache.render(template, categoria);
         $('#dropcat').append(rendered);
        }
      });
  }

  function crearListCategoria(categoria) { //crea la lista de categorias
    $.ajax({ url: 'js/templates/categorias.mst',
       success: function(template) {
         var rendered = Mustache.render(template, categoria);
         $('#categoria').append(rendered);
        }
      });
  }

	function cargarcategorias(){
    $.ajax( "api/categoria" )
    .done(function(categorias) {
      for(var key in categorias) {
        crearDropdownCategoria(categorias[key]);
        crearListCategoria(categorias[key]);
      }
    })
    .fail(function() {
        $('#dropcat').append('<li>Imposible cargar las Categorias</li>');
        $('#categoria').append('<li>Imposible cargar la lista de Categorias</li>');
    });
	}

  function borrarCategoria(idcategoria){
    $.ajax(
      {
        method: "DELETE",
        url: "api/categoria/" + idcategoria
      })
    .done(function() {
       $('#categoria'+idcategoria).remove();
       $('#dropdown'+idcategoria).remove();
    })
    .fail(function() {
        alert('Imposible borrar la tarea');
    });
  }

  $('body').on('click', 'a.eliminar', function() {
    var idcategoria = this.getAttribute('idcategoria');
    borrarCategoria(idcategoria);
  });

  $('body').on('click', 'a.eliminar', function() {
    var idcategoria = this.getAttribute('idcategoria');
    borrarCategoria(idcategoria);
  });
  
  cargarcategorias();
});
