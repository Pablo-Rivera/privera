$(document).ready(function(){
	function cargarnav(seccion){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'index.php?nav=' + seccion,
			success: function(data){
				$("#cuerpo").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	}
	cargarnav('home');
	$("#Home").on("click",function(event){
		event.preventDefault();
		cargarnav('home');
	})
	$("#sabores").on("click",function(event){
		event.preventDefault();
		cargarnav('sabores');
	})
	$("#postres").on("click",function(event){
		event.preventDefault();
		cargarnav('postres');
	})
	$("#encargues").on("click",function(event){
		event.preventDefault();
		cargarnav('encargues');
	})
	$("#juego").on("click",function(event){
		event.preventDefault();
		cargarnav('juego');
	})
	$("#Productos").on("click",function(event){
		event.preventDefault();
		cargarnav('verporductos');
	})

	$("#cuerpo").on("submit",'#formLogin', function(event){
		event.preventDefault();
		$.ajax({
			method: "POST",
			url: 'admin.php?action=login',
			data: new FormData(this),
			contentType : false,
			processData : false,
		})
		.done(function(data) {
			$('#cuerpo').html(data);
		})
		.fail(function() {
		});
  });

	$("#administracion").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'admin.php',
			success: function(data){
				$('#cuerpo').html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})

	$('#enviar').on('click',function(event){
		var nombre = $( "nombre" ).val();
		var email = $( "email" ).val();
		var cuestion = $( "inconveniente" ).val();
		var comentario = $( "Comentario" ).val();
		var datos={nombre:nombre, email:email, cuestion:cuestion, comentario:comentario};
		$.ajax({
			type: "POST",
			dataType: "JSON",
			url: 'index.php?nav=mail',
			data: datos,
			success: function(data){
				alert("AFASFS");
			},
			error: function(data){
			}
		})
	})

});
