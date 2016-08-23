$(document).ready(function(){
	$('.caption p a').on('click',function(){
		var value=$(this).attr('value');
		var ide=$(this).attr('id');
		
		 $(this).addClass('active');
		//alert(value);
		$.ajax({
			url:'likepanel.php',
			
			data:{type: value,id: ide},
			success:function(data){
				//$('#messages').html(data);
				//alert("done");
			}
		});
		
		
		return false;
		});
		
	// update like panel(need to build)	
	var interval=setInterval(function(){
		$.ajax({
			url:'updatelikepanel.php',
			method:'POST',
			data:{receiverid: id},
			success:function(data){
				
				$('.caption p a .badge').html(data);
			}
		});
	}, 2000);
	
});
