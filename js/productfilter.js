var vendor;
$(document).ready(function(){
				
				$('#lista1 li').on('click',function(){
					vendor=$(this).attr('value');
					document.getElementById("lead").innerHTML=vendor;
					//$('#rate').html(<?php echo 'updaterate(id)';?>);
					//alert(vendor);
					$.ajax({
						url:'productlistByv.php',
						method:'POST',
						data:{shopvendor:vendor},
						success:function(data){
							//alert("done");
							$('#productlist').html(data);
						}
					});
					$.ajax({
						url:'ratingdisplay.php',
						method:'POST',
						data:{shopvendor:vendor},
						success:function(data){
							//alert("done");
							$('#rate').html(data);
						}
					});
					
					return false;
					});
				$('#type a').on('click',function(){
					var type=$(this).attr('value');
					//document.getElementById("lead").innerHTML=vendor;
					//$('#rate').html(<?php echo 'updaterate(id)';?>);
					//alert(vendor);
					$.ajax({
						url:'productByt.php',
						method:'POST',
						data:{shopvendor:vendor,type:type},
						success:function(data){
							//alert("done");
							$('#productlist').html(data);
						}
					});
					
					
					return false;
					});
			});