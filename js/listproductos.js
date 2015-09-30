
$(document).ready(function(){

	function cargarProductos(seccion){
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

  cargarProductos('productos');

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
