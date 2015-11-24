$(document).ready(function(){
  function cargarProducto(seccion,id_prod){
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



	$(".ver").on("click",function(event){
		event.preventDefault();
    var id_prod=event.target.href;
    var posbarra=id_prod.lastIndexOf("/");
    id_prod = id_prod.substr(posbarra+1);
		cargarProducto('verproducto',id_prod);
	});

});
