$(document).ready(function(){

  $("#formcat").submit(function(event){
    event.preventDefault();

        /* Clear result div*/

        /* Get some values from elements on the page: */
        var values = $(this).serialize();

        /* Send the data using post and put the results in a div */
        $.ajax({
            url: "index.php?admin=agregar_categoria",
            type: "post",
            data: values,
            success: function(){
                cargarcat('categorias');
                cargardrop('dropcat');
            },
            error:function(){
                alert("failure");
                $("#result").html('There is error while submit');
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
