$(document).ready(function(){
	var id_prod = '';

  $(".botonAgregarImagenes").on("click", function(event){
    event.preventDefault();
    id_prod=event.target.href;
    var posbarra=id_prod.lastIndexOf("/");
    id_prod = id_prod.substr(posbarra+1);
    $('#imagesToUpload2').click();
  });

  $("#imagesToUpload2").on("change", function(event){
    event.preventDefault();
    $('#imgAjax').submit();
  });

  $("#imgAjax").on("submit", function(event){
    event.preventDefault();
    $.ajax({
      type: "POST",
      url:"index.php?admin=agregar_imagenes&id_task=" + id_prod,
      data: new FormData(this),
      contentType : false,
      processData : false,
      error: function(){
        alert("No anduvo la llamada AJAX");
      },
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
	function cargarProducto(seccion){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'index.php?admin=' + seccion+'&id_producto='+ id_prod,
			success: function(data){
				$("#productos").html(data);
				$("#cuerpo").html(data);

			},
			error: function(){
				alert("error");
			}
		})
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
			prod["imagenes"]=prod["imagenes"][0];
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

	$('#productos').on('click', 'a.eliminarp', function() {
		var idprod = this.getAttribute('idprode');
		borrarProducto(idprod);
	});

	$('#productos').on('click',"a.ver",function(){
    id_prod=this.getAttribute('idprodv');
		cargarProducto('verproducto');
	});

  cargarProductos();

});
