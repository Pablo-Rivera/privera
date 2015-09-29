$(document).ready(function(){

  $("#formcat").submit(function(event){
    event.preventDefault();
        $.ajax({
            url: "index.php?admin=agregar_categoria",
            type: "post",
            data: new FormData(this),
			      contentType : false,
			      processData : false,
            success: function(){
                cargarcat('categorias');
                cargardrop('dropcat');
            },
            error:function(){
                alert("failure");
            }
        });

  });

	function cargardrop(seccion){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'index.php?admin=' + seccion,
			success: function(data){
				$("#dropcat").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	}

  function cargarcat(seccion){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'index.php?admin=' + seccion,
			success: function(data){
				$("#categoria").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	}

	cargardrop('dropcat');
  cargarcat('categorias');
	// $("#nuevacat").on("click",function(event){
	// 	event.preventDefault();
	// 	cargardrop('dropcat');
  //   cargarcat('categorias');
	// })

});
