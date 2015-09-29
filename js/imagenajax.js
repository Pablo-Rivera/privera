$(document).ready(function(){
  $(".botonAgregarImagenes").on("click", function(event){
    event.preventDefault();

    var archivos = $("#imagesToUpload").prop('files');

    if(typeof(archivos) == 'undefined'){
      mostrarMensaje("No pusiste imagenes");
      return;
    }

    var datos = new FormData();

    $.each(archivos, function(key,value){
      datos.append(key,value);
    });

    $.ajax({
      type: "POST",
      dataType: "json",
      url: event.target.href,
      data: datos,
      success: function(data){
        alert(data.result);
      },
      error: function(){
        alert("No anduvo la llamada AJAX");
      },
      contentType : false,
      processData : false
    });

  });

  function cargarProducto(seccion,id){
    $.ajax({
      type: "GET",
      dataType: "html",
      url: 'index.php?admin=' + seccion+'&id_producto='+id,
      success: function(data){
        $("#producto").html(data);
      },
      error: function(){
        alert("error");
      }
    })
  }


  	$(".ver").on("click",function(event){
  		event.preventDefault();
  		cargarProducto('verproducto',$(this).val());
  	})

  });
