$(document).ready(function() 
{
	$('.rate-btn').hover(function(){
					$('.icon').removeClass('icon1');
					var therate = $(this).attr('id');
					
					for (var i = therate; i >= 0; i--) {
						$('.rate-btn-'+i).addClass('icon1');
					};
				},function(){
					$('.icon').removeClass('icon1').addClass('icon');
				});
				
				$('.rate-btn').on('click',function(){    
					var therate = $(this).attr('id');
					var shopvendor="mallika";
					 $.ajax({
						type : "POST",
						url : "rating.php",  //change it with your own adress to the code
						data: {rate:therate, shopvendor:shopvendor},
						success:function(data){
							$('#rate').html(data);
						}
					});
				});
});