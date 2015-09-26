
$(document).ready(function(){
	function cargarnav(seccion){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'index.php?nav=' + seccion,
			success: function(data){
				$("#admin").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	}
  cargarnav('productos');
	$("#nuevoproducto").on("click",function(event){
		event.preventDefault();
		cargarnav('productos');
	})

});
