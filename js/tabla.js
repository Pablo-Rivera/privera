
$('document').ready(function(){

	// Definicion de Variables
	grupo = 22;
	function guardarInformacion(grupo){
			var porciones = $("#porciones").val();
			$("#porciones").val('');
		  var cantidad = $("#cantidad").val();
			$("#cantidad").val('')
		  var precio = $("#precio").val();
			$("#precio").val('');
		  var informacion = [porciones, cantidad, precio];
		  var info = {
		      "group": grupo,
		      "thing": informacion
		      };

		  if (grupo && informacion){
		    $.ajax({
		       type: "POST",
		       dataType: 'JSON',
		       data: JSON.stringify(info),
		       contentType: "application/json; charset=utf-8",
		       url: "http://web-unicen.herokuapp.com/api/create",
					success: function(data){
							traerTabla(grupo);
			       },
			       error:function(data){
			         alert('No se pudo comunicar con el servidor');
			       }
		    });
		  }
	}

	function traerTabla(grupo){
	  $.ajax({
	     type: "GET",
	     dataType: 'JSON',
	     url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
	     success: function(data){
	        var porciones = "";
	        var cantidad = "";
	        var precio = "";
					var registro = "";
					$("#cuerpotabla").html('');
	        for (var i = 1; i < data.information.length; i++) {
		         porciones = data.information[i]['thing'][0];
		         cantidad = data.information[i]['thing'][1];
		         precio = data.information[i]['thing'][2];
		         registro = "<tr><td>" + porciones + "</td><td>" + cantidad + "</td><td>" + precio + "</td></tr>";
						$("#cuerpotabla").append(registro);
	        }

	     }
	  });
	}

		traerTabla(grupo);

		// Llama a la Funcion cargarActividades cuando se Presiona el Boton Correspondiente
		$('#agregar').on('click', function(event){
			event.preventDefault();
			guardarInformacion(grupo);
		});
	});
