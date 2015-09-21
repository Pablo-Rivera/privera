$(document).ready(function(){
	function cargarnav(seccion){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'index.php?accion=' + seccion,
			success: function(data){
				$("#cuerpo").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	}
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

});
