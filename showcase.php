<?php
	require_once 'updateRate.php';
	require_once 'productlist.php';
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Showcase</title>
		<link rel="stylesheet" type="text/css" media="screen" href="css/CSSreset.min.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/als_demo.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/listscroller.css" >
		<link href="css/thumbnail-gallery.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/showcase.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Showcase</a>
                    </li>
                    <li>
                        <a href="#">Design</a>
                    </li>
                    <li>
                        <a href="#">Vmirror</a>
                    </li>
					 <li>
                        <a href="#">Photohub</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="#">Sign Up</a></li>
				  <li><a href="#">Login</a></li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
		<div class="container">
			<div class="row" >
				<section id="content" style="background-color:#B57E72; height:180px; border-radius: 10px 10px 10px 10px;">
					
					<div id="lista1" class="als-container">
						<span class="als-prev"><img src="img/listscroller/thin_left_arrow_333.png" alt="prev" title="previous" /></span>
						<div class="als-viewport">
							<ul class="als-wrapper">
								<li class="als-item" value="Neha Jewellery" onclick="document.getElementById('shopImage').src='img/als-images/n.png'"><img src="img/als-images/n.png"/>Neha Jewellers</li>
								<li class="als-item" value="mallika" onclick="document.getElementById('shopImage').src='img/als-images/h.png'"><img src="img/als-images/h.png"/>Mallika</li>
								<li class="als-item" value="cjs" onclick="document.getElementById('shopImage').src='img/als-images/cjs.png'"><img src="img/als-images/cjs.png"/>CJS</li>
								<li class="als-item" value="kendra scot" onclick="document.getElementById('shopImage').src='img/als-images/ks.png'"><img src="img/als-images/ks.png"/>Kendra Scot</li>
								<li class="als-item" value="ambika jewellers" onclick="document.getElementById('shopImage').src='img/als-images/ambika-jewellers.png'"><img src="img/als-images/ambika-jewellers.png"/>Ambika Jewellers</li>
								<!--<li class="als-item"><img src="images/als-images/cut.png" alt="scissors" title="scissors" />scissors</li>
								<li class="als-item"><img src="images/als-images/heart.png" alt="heart" title="heart" />heart</li>
								<li class="als-item"><img src="images/als-images/map.png" alt="pin" title="pin" />pin</li>
								<li class="als-item"><img src="images/als-images/mobile_phone.png" alt="mobile phone" title="mobile phone" />mobile phone</li>
								<li class="als-item"><img src="images/als-images/camera.png" alt="camera" title="camera" />camera</li>
								<li class="als-item"><img src="images/als-images/music_note.png" alt="music note" title="music note" />music note</li>
								<li class="als-item"><img src="images/als-images/protection.png" alt="umbrella" title="umbrella" />umbrella</li>
								<li class="als-item"><img src="images/als-images/television.png" alt="television" title="television" />television</li>-->
							</ul>
						</div>
						<span class="als-next"><img src="img/listscroller/thin_right_arrow_333.png" alt="next" title="next" /></span>
					</div>
					
				</section>
			</div>
			<div class="row">
				<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog modal-lg">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Modal Header</h4>
							</div>
							<div class="modal-body">
								<div id="compareitem" class="row">
								<div class="col-md-6">
									<div class="thumbnail">
										<img src="http://placehold.it/320x150" alt="">
										
									</div>
								</div>
							
							<div class="col-md-6">
								<div class="thumbnail">
									<img src="http://placehold.it/320x150" alt="">
									
								</div>
							</div>
							</div>
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" onclick="btnfunc()">Close</button>
							</div>
						  </div>
						  
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
						
							<form class="navbar-form" role="search">
								<div class="input-group">
								  <input class="form-control" placeholder="Search">
								  <div class="input-group-btn">
									<button class="btn btn-default" type="button">GO!</button>
									
								  </div>
								 
								</div>
								 <button id="comparenow" class="btn btn-info pull-right" type="button" data-toggle="modal" data-target="#myModal" disabled>Compare Now</button>
							</form>
							
						
						<hr>
						</div>
						<div id="productlist">
						<?php foreach($products as $product1):?>
						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<img src="http://placehold.it/320x150" alt="">
								<div class="caption">
									<h4 class="pull-right"><?php echo $product1['product_price']; ?></h4>
									<h4><a href="#"><?php echo $product1['product_name']; ?></a>
									</h4>
									<p><?php echo $product1['product_dec']; ?></p>
								</div>
								
								<div>
									<form role="form">
										<div class="checkbox">
										  <label><input id="compare" type="checkbox" value="<?php echo $product1['product_name']; ?>">compare</label>
										</div>
									</form>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
						</div>
					</div>
					
					<div class="col-md-4">
						 <p id="lead" class="lead">Shop Name</p>
							<div class="thumbnail" style="height:250px; width:250px;">
                            <img id="shopImage" src="http://placehold.it/250x250" alt="">
							</div>
							<div class="ratings" >
                                
                                <div>
									<div id="1" class="rate-btn"><span class="rate-btn-1 icon"></span></div>
									<div id="2" class="rate-btn"><span class="rate-btn-2 icon"></span></div>
									<div id="3" class="rate-btn"><span class="rate-btn-3 icon"></span></div>
									<div id="4" class="rate-btn"><span class="rate-btn-4 icon"></span></div>
									<div id="5" class="rate-btn"><span class="rate-btn-5 icon"></span></div>
								</div>
								<div id="rate">
								</div>
                            </div>
							<div id="type" class="list-group">
								<a class="list-group-item" value="ring">Rings</a>
								<a class="list-group-item" value="earings">Earings</a>
								<a class="list-group-item" value="neckles">Neckles</a>
							</div>
					</div>
					
			</div>

			<footer class="container1">
				<div class="navbar navbar-inverse navbar-fixed-bottom navbar-custom">
					<div class="col-sm-4"></div>
					<div class="col-lg-4">
						<p>&#169Copyright -- House Of Diamante , 2016.</p>
					</div>
					<div class="col-sm-4">
						<a href=""><img class="img-responsive"src=""></a>
					</div>
				</div>
			</footer>
		
		</div>
	
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.als-1.7.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/rating.js"></script>
		<script src="js/productfilter.js"></script>
		<script type="text/javascript">
		function btnfunc(){
			comparenow.disabled=true; 
			$( "input[type='checkbox']" ).prop({disabled:false});
			$( "input[type='checkbox']" ).prop({checked:false});
		}
		var choice=[];
		var Checked = function() {
			//alert('rer');
		  var n = $( "input:checked" ).length;
		  var val1=$( "input:checked:last" ).val();
		  var val2=$( "input:checked:first" ).val();
		  //alert(val1+""+val2);
		  
		  if(n==2){
			  choice.push(val1);
			  choice.push(val2);
			  //val="";
			  //alert(val);
			  comparenow.disabled=false;
			  $( "input[type='checkbox']" ).prop({disabled: true});
			  $.ajax({
						url:'compareitems.php',
						method:'POST',
						data:{item1:choice[0],item2:choice[1]},
						success:function(data){
							//alert("done");
							choice=[];
							$('#compareitem').html(data);
						}
					});
		  }
		};
		 
		$('input[type=checkbox]').on("click",Checked );
		
			$(document).ready(function() 
			{
				$("#lista1").als({
					visible_items: 4,
					scrolling_items: 2,
					orientation: "horizontal",
					circular: "yes",
					autoscroll: "yes",
					interval: 4000
				});
				
			});
			
		</script>
	</body>
</html>