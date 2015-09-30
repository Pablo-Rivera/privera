$(document).ready(function(){
  var id_prod = '';
  function AjaxImagenes(formData){
    $.ajax({
      type: "POST",
      url:"index.php?admin=agregar_imagenes&id_task=" + id_prod,
      data: formData,
      contentType : false,
      processData : false,
      success: function(data){
        alert(data.result);
      },
      error: function(){
        alert("No anduvo la llamada AJAX");
      },
    });
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
    AjaxImagenes(new FormData(this));
  });

  function cargarProducto(seccion,id){
    $.ajax({
      type: "GET",
      dataType: "html",
      url: 'index.php?admin=' + seccion+'&id_producto='+id,
      success: function(data){
        $("#productos").html(data);
        $("#cuerpo").html(data);

      },
      error: function(){
        alert("error");
      }
    })
  }

  function eliminarProducto(prod){
    $.ajax({
      type: "DELETE",
      url:"index.php?admin=eliminar_prod&id_producto=" + prod,
      success: function(data){
        $("#productos").html(data);
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
    eliminarProducto(id_prod);
  });

  	$(".ver").on("click",function(event){
  		event.preventDefault();
  		cargarProducto('verproducto',$(this).val());
  	})

  });
