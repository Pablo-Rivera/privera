$(document).ready(function(){
  var id_prod = '';
  function AjaxImagenes(formData){
  };

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

  function eliminarProducto(){
    $.ajax({
      type: "DELETE",
      url:"index.php?admin=eliminar_prod&id_producto=" + id_prod,
      success: function(data){
        cargarProductos('productos');
      },
      error: function(){
        alert("No anduvo la llamada AJAX");
      },
    });
  };

  $(".eliminar").on("click", function(event){
    event.preventDefault();
    id_prod=event.target.href;
    var posbarra=id_prod.lastIndexOf("/");
    id_prod = id_prod.substr(posbarra+1);
    eliminarProducto();
  });

	$(".ver").on("click",function(event){
		event.preventDefault();
    id_prod=event.target.href;
    var posbarra=id_prod.lastIndexOf("/");
    id_prod = id_prod.substr(posbarra+1);
		cargarProducto('verproducto');
	})

  });
