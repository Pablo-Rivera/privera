$(document).ready(function(){
  
  function logout(){
		$.ajax({
			type: "GET",
			dataType: "html",
			url: 'admin.php?action=logout',
			success: function(data){
        $('#cuerpo').html(data);
			},
			error: function(){
			}
		})
	}

  $("#logout").on("click",function(event){
    event.preventDefault();
    logout();
  })


});
