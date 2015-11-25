$(document).ready(function(){
  function cargarProducto(seccion,id_prod){
    $.ajax({
      type: "GET",
      dataType: "html",
      url: 'index.php?nav=' + seccion+'&id_producto='+ id_prod,
      success: function(data){
        $("#cuerpo").html(data);

      },
      error: function(){
        alert("error");
      }
    })
  }

  function cargarProductosxCategoria(idcat){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'index.php?nav=verporductos&id=' + idcat,
			success: function(data){
        $("#cuerpo").html(data);
        $('#id_categoriad').val(idcat);
			},
			error: function(){
				alert("error");
			}
		})
	}

  $('#id_categoriad').on('change', function(event){
  		event.preventDefault();
  		cargarProductosxCategoria($(this).val());
  	});


	$(".ver").on("click",function(event){
		event.preventDefault();
    var id_prod=event.target.href;
    var posbarra=id_prod.lastIndexOf("/");
    id_prod = id_prod.substr(posbarra+1);
		cargarProducto('verproducto',id_prod);
	});

});
