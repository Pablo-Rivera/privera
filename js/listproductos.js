
$(document).ready(function(){

	function crearListProducto(producto) { //crea la lista de productos
		$.ajax({ url: 'js/templates/producto.mst',
			async:false,
			success: function(template) {
			 var rendered = Mustache.render(template, producto);
			 $('#productos').append(rendered);
			}
		});
	}

	function cargarProductos(){
		$.ajax( "api/producto" )
    .done(function(productos) {
      for(var key in productos) {
        crearListProducto(productos[key]);
      }
    })
    .fail(function() {
        $('#dropcat').append('<li>Imposible cargar las Categorias</li>');
    });
	}

  cargarProductos();

  $("#formprod").submit(function(event){
    event.preventDefault();

        $.ajax({
            url: "index.php?admin=agregar_producto",
            type: "post",
            data: new FormData(this),
			      contentType : false,
			      processData : false,
            success: function(){
							$('#dropcat').val(0);
							$('#nombre').val('');
							$('#descripcion').val('');
							$('#precio').val('');
							cargarProductos('productos');
            },
            error:function(){
                alert("failure");
            }
        });

  });
});
