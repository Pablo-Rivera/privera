$(document).ready(function(){
	var id_prod = '';

  $('#productos').on('click','a.botonAgregarImagenes', function(){
    id_prod = this.getAttribute('idprodi');
    $('#imagesToUpload2').click();
  });

  $("#imgAjax").on("submit", function(event){
		event.preventDefault();
		$.ajax({
			method: "POST",
			url: "api/producto/img/"+id_prod,
			data: new FormData(this),
			contentType : false,
			processData : false,
		})
		.done(function() {

		})
		.fail(function() {
			$('#productos').append('<li>Imposible agregar el Producto</li>');
		});
  });


	function crearListProducto(producto) { //crea la lista de productos
		$.ajax({ url: 'js/templates/producto.mst',
			async:false,
			success: function(template) {
			 var rendered = Mustache.render(template, producto);
			 $('#productos').append(rendered);
			}
		});
	}

	function crearImagen(imagen){
		$.ajax({ url: 'js/templates/imagen.mst',
			async:false,
			success: function(template) {
			 var rendered = Mustache.render(template, imagen);
			 $('#imgprod').append(rendered);
		 }
		});
	}

	function crearProducto(producto){
		$.ajax({ url: 'js/templates/ProdCompleto.mst',
			success: function(template) {
			 var rendered = Mustache.render(template, producto);
			 $('#productos').html(rendered);
			 for(var img in producto["imagenes"]) {
				 crearImagen(producto["imagenes"][img]);
			}
		}
		});
	}

	function cargarProducto(idproducto){
		$.ajax('api/producto/'+ idproducto)
		.done(function(producto) {
      crearProducto(producto);
    })
    .fail(function() {
        $('#productos').append('<li>Imposible cargar las Producto</li>');
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
        $('#productos').append('<li>Imposible cargar los Productos</li>');
    });
	}


  $("#formprod").submit(function(event){//agregar producto
    event.preventDefault();
		$.ajax({
			method: "POST",
			url: "api/producto",
			data: new FormData(this),
      contentType : false,
      processData : false,
		})
		.done(function(prod) {
			prod["imagenes"]=prod["imagenes"][0]["path"];
			crearListProducto(prod);
			$('#dropcat').val(0);
			$('#nombre').val('');
			$('#descripcion').val('');
			$('#precio').val('');
		})
		.fail(function() {
			$('#productos').append('<li>Imposible agregar el Producto</li>');
		});
  });

	function borrarProducto(idproducto){
		$.ajax(
			{
				method: "DELETE",
				url: "api/producto/" + idproducto
			})
		.done(function() {
			 $('#producto'+idproducto).remove();
		})
		.fail(function() {
				alert('Imposible borrar el producto');
		});
  };

	function borrarimagen(idimg){
		$.ajax(
			{
				method: "DELETE",
				url: "api/producto/img/" + idimg
			})
		.done(function() {
			 $('#img'+idimg).remove();
		})
		.fail(function() {
				alert('Imposible borrar la imagen');
		});
	}

	$('#productos').on('click', 'a.eliminarp', function() {
		var idprod = this.getAttribute('idprode');
		borrarProducto(idprod);
	});

	$('#productos').on('click', 'a.eliminarimg', function() {
		var idimg = this.getAttribute('idimg');
		borrarimagen(idimg);
	});

	$('#productos').on('click',"a.ver",function(){
    var idprod=this.getAttribute('idprodv');
		cargarProducto(idprod);
	});

  cargarProductos();

});
