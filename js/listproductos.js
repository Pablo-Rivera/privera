
$(document).ready(function(){
	function cargarnav(seccion){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'index.php?admin=' + seccion,
			success: function(data){
				$("#productos").html(data);
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
