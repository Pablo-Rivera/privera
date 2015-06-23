$(document).ready(function(){
	$("#Home").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "homex.html",
			success: function(data){
				$("#cuerpo").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});
$(document).ready(function(){
	$("#sabores").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "sabores.html",
			success: function(data){
				$("#cuerpo").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});
$(document).ready(function(){
	$("#postres").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "postres.html",
			success: function(data){
				$("#cuerpo").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});
$(document).ready(function(){
	$("#encargues").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "encargues.html",
			success: function(data){
				$("#cuerpo").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});

function guardarInformacion(){
		var porciones = $("#porciones").val();
	  var cantidad = $("#cantidad").val();
	  var precio = $("#precio").val();
	  var grupo = 22;
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
		         alert('Deploy Success');
		       },
		       error:function(data){
		         alert('No se pudo comunicar con el servidor');
		       }
	    });
	  }
}

function traerTabla(){
  var grupo = 22;
  $.ajax({
     type: "GET",
     dataType: 'JSON',
     url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
     success: function(data){
        var porciones = "";
        var cantidad = "";
        var precio = "";
        for (var i = 1; i < data.information.length; i++) {
	         porciones = data.information[i]['thing'][0];
	         cantidad = data.information[i]['thing'][1];
	         precio = data.information[i]['thing'][2];
	         $("#cuerpotabla").append("<tr><td>" + porciones + "</td><td>" + cantidad + "</td><td>" + precio + "</td></tr>");
        }

     }
  });
}
