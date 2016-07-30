$('#form_input').submit(function(){
	var message=$('#message').val();
	//alert(message);
	$.ajax({
		url:'send.php',
		data:{message: message},
		success:function(data){
			alert(data);
		}
	});
	
	
	return false;
});