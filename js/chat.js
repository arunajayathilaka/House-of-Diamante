var userid;
//updat chat
$(document).ready(function(){
	
	var interval=setInterval(function(){
		$.ajax({
			url:'message.php',
			method:'POST',
			data:{receiverid: userid},
			success:function(data){
				
				$('#messages').html(data);
			}
		});
	}, 2000);
	
});
//select vendor
$('#vendor').ready(function(){
	$('.vendor a').on('click',function(){
		userid=$(this).attr('value');
		//alert(id);
		$.ajax({
			url:'message.php',
			method:'POST',
			data:{receiverid: userid},
			success:function(data){
				$('#messages').html(data);
			}
		});
		
		
		return false;
		});
	
});

$('#form_input').submit(function(){
	var message=$('#message').val();
	document.getElementById("form_input").reset();
	//form.value='';
	//alert(message);
	$.ajax({
		url:'send.php',
		
		data:{receiverid: userid, message: message},
		success:function(data){
			//alert(data);
		}
	});
	
	
	return false;
});