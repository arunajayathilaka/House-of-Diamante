$(document).ready(function(){
	
	var interval=setInterval(function(){
		$.ajax({
			url:'message.php',
			success:function(data){
				
				$('#messages').html(data);
			}
		});
	}, 2000);
	
});