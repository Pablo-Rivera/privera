$(document).ready(function(){

  $("#formcat").submit(function(event){
    event.preventDefault();
        $.ajax({
            url: "index.php?admin=agregar_categoria",
            type: "POST",
            data: new FormData(this),
			      contentType : false,
			      processData : false,
            success: function(){
                $("#categoriai").val('');
                cargarcat('categorias');
                cargardrop('dropcat');
            },
            error:function(){
                alert("failure");
            }
        });

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
    $.ajax( "api/categorias" )
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
  cargarcategorias();
});
