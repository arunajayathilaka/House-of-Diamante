var id;
//updat chat
$(document).ready(function(){
	
	var interval=setInterval(function(){
		$.ajax({
			url:'message.php',
			method:'POST',
			data:{receiverid: id},
			success:function(data){
				
				$('#messages').html(data);
			}
		});
	}, 2000);
	
});
//select vendor
$('#vendor').ready(function(){
	$('.vendor a').on('click',function(){
		id=$(this).attr('value');
		//alert(id);
		$.ajax({
			url:'message.php',
			method:'POST',
			data:{receiverid: id},
			success:function(data){
				$('#messages').html(data);
			}
		});
		
		
		return false;
		});
	
});

$('#form_input').submit(function(){
	var message=$('#message').val();
	//alert(message);
	$.ajax({
		url:'send.php',
		
		data:{receiverid: id, message: message},
		success:function(data){
			alert(data);
		}
	});
	
	
	return false;
});