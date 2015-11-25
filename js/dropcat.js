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
          $('#administracion').click();
          $('#categoria').append('<li>Imposible agregar la categoria</li>');
        });
    }
    else{
      $('#categoria').append('<li>nombre muy corto</li>');
    }
  });

  function crearDropdownCategoria(categoria) {//crea el componente html del dropdown por categoria
    $.ajax({ url: 'js/templates/dropcat.mst',
      async:false,
      success: function(template) {
        var rendered = Mustache.render(template, categoria);
        $('#dropcat').append(rendered);
        $('#dropcatm').append(rendered);
      }
    });
  }

  function crearListCategoria(categoria) { //crea la lista de categorias
    $.ajax({ url: 'js/templates/categoria.mst',
      async:false,
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
        $('#administracion').click();
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
      $('#administracion').click();
      alert('Imposible borrar la categoria');
    });
  }

  function modificarCategoria(nombrecat){
    var categoria={nombre: nombrecat};
    $.ajax(
      {
        method: "PUT",
        url: "api/categoria/" + idcategoria,
        dataType: "json",
        data: JSON.stringify(categoria)
      })
    .done(function() {
      $('#nombre'+idcategoria).html(nombrecat);// remplazar
      $('#dropdown'+idcategoria).html(nombrecat);
    })
    .fail(function() {
      $('#administracion').click();
      alert('Imposible modificar la categoria');
    });
  }

  $('#categoria').on('click', 'a.eliminarc', function() {
    var idcategoria = this.getAttribute('idcategoria');
    borrarCategoria(idcategoria);
  });

  $('#categoria').on('click', 'a.modificarc', function() {
    var idcategoria = this.getAttribute('idcatm');
    $.ajax( "api/categoria/"+idcategoria )
    .done(function(nombre) {
        $('#updatecat').val(nombre);
    })
    .fail(function() {
      $('#administracion').click();
      alert("no se pudo obtener nombre categoria");
    });
  });

  $("#nuevoNombreCat").on("click", function(event){
    event.preventDefault();
    var nuevonombre=$('#updatecat').val();
    if(nuevonombre.length > 4){
      modificarCategoria(nuevonombre)
    }
  });

  cargarcategorias();
  //modificarCategoria("20","cambiarnombre");

});
