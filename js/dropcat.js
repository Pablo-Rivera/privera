$(document).ready(function(){

  function guardarInformacion(){
      var categoria = $("#newcat").val();
      $("#newcat").val('');
      if (categoria){
        $.ajax({
           type: "POST",
           dataType: 'JSON',
           data: JSON.stringify(info),
           contentType: "application/json; charset=utf-8",
           url: "index.php?nav=agregar_cat",
          success: function(data){
              cargardrop('dropcat');
             },
             error:function(data){
               alert('No se pudo comunicar con el servidor');
             }
        });
      }
  }

	function cargardrop(seccion){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'index.php?nav=' + seccion,
			success: function(data){
				$("#dropcat").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	}
	cargardrop('dropcat');
	$("#nuevacat").on("click",function(event){
		event.preventDefault();
		cargardrop('dropcat');
	})

});
