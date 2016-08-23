
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photohub</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.clickable{
		cursor: pointer;   
	}

	.panel-heading span {
		margin-top: -20px;
		font-size: 15px;
	}
	img:hover {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
	
	
	
	.selected{
		box-shadow:0px 12px 22px 1px #333;
		opacity: 0.5;
		filter: alpha(opacity=50);
	}
}
	</style>
</head>

<body style=" background-image: img/bg5.jpg" >

    <!-- Navigation -->
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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
			<div class="col-md-3">
			
				<div class="panel panel-default" style="height:380px; margin-top:20px;">
					<div class="panel-body">
						<div class="span12" style="text-align: center">      
							<h1 id="gemtype">Saphire</h1>
							<img src="http://placehold.it/100x100" alt="">
							<p>Trace amounts of elements such as iron, titanium, chromium, copper, or magnesium can give corundum respectively blue, 
							yellow, purple, orange, or green color. Chromium impurities in corundum yield pink or red tint, the latter being called ruby. 
							Commonly, sapphires are worn in jewelry.</p>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				 <!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
					
					  <!-- Modal content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Call Quotation</h4>
						</div>
						<div class="modal-body" style="height:380px; overflow-y: scroll;" >
						    <div class="form-group">
								<label>Full Name</label>
								<textarea class="form-control" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label>E mail</label>
								<textarea class="form-control" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label>Phone Number</label>
								<textarea class="form-control" rows="1"></textarea>
							</div>
							<div class="form-group">
									<label>Select the ring</label>
									<div class="checkbox">
										<label>
											<input type="checkbox" value=""> Add modified one
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="">Add new one
										</label>
									</div>
							</div>
							<div class="form-group">
								<label>Ring Size</label>
								<select class="form-control">
										<option>Size 5</option>
										<option>Size 6</option>
										<option>Size 7</option>
										<option>Size 8</option>
									</select>
								<a><small>more ring sizes</small></a>
							</div>
							<div class="form-group">
								<label>Carrot Weight</label>
								<select class="form-control">
									<option>14ct</option>
									<option>20ct</option>
									<option>22ct</option>
								</select>
							</div>
							<div class="form-group">
								<label>Metal</label>
								<textarea class="form-control" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label>Gemstone</label>
								<textarea class="form-control" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label>Center Cut</label>
								<textarea class="form-control" rows="1"></textarea>
							</div>
							
							<div class="form-group" disabled>
								<label>photo of ring</label>
								<input type="file">
								<p class="help-block">input JPG or PNG</p>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
						
					  </div>
					  
					</div>
				  </div>
				<div class="panel panel-default" style="height:380px; margin-top:20px;">
				<div class="panel-body">
				<div class="text-right" style="margin-top:320px;">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Quotation</button>
				</div>
				</div>
				
			</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default" style="height:380px; margin-top:20px; overflow-y: scroll;">
					<div class="panel-body" >
						<div class="panel panel-info" id="pan">
								<div class="panel-heading">
									<h3 class="panel-title">Metals</h3>
									<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
								</div>
								<div class="panel-body" id="p1">
								<div id="f1">
									<div class="thumbnail text-center" style="height:auto; width:50px; float:left; margin: 5px 5px 5px 5px;">
										<a id="" value="edit_ring_gold" role="button"><img src="http://placehold.it/50x50" alt=""></a>
										
										<small>Gold</small>
										
									</div>
									<div class="thumbnail text-center" style="height:auto; width:50px; float:left; margin: 5px 5px 5px 5px;">
										<a id="" value="edit_ring_silver" role="button"><img src="http://placehold.it/50x50" alt=""></a>
										
										<small>Silver</small>
										
									</div>
									<div class="thumbnail text-center" style="height:auto; width:50px; float:left; margin: 5px 5px 5px 5px;">
										<a id="" value="edit_ring_rose" role="button"><img src="http://placehold.it/50x50" alt=""></a>
										
										<small>Rose</small>
										
									</div>
									<div class="thumbnail text-center" style="height:auto; width:50px; float:left; margin: 5px 5px 5px 5px;">
									    <a id="" value="edit_ring_white" role="button"><img src="http://placehold.it/50x50" alt=""></a>
										
										<small>White</small>
										
									</div>
								</div>	
								
								</div>
						</div>
						
						<div class="panel panel-info" id="pan">
								<div class="panel-heading">
									<h3 class="panel-title">Gemstones</h3>
									<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
								</div>
								<div class="panel-body" id="p1">
								<div></div>
								<hr>
								<div id="f2">
								<?php $arr=['edit_gem_red','edit_gem_blue','edit_gem_vine'];?>
								<?php for($r=1;$r<=3;$r++): ?>
									<div class="thumbnail text-center" style="height:auto; width:50px; float:left; margin: 5px 5px 5px 5px;">
										<a id="<?php echo $r; ?>" value= "<?php echo $arr[$r-1]; ?>" role="button"><img src="http://placehold.it/50x50" alt=""></a>							
									</div>
								<?php endfor;?>
								</div>
								</div>
						</div>
					
						<div class="panel panel-info" id="pan">
								<div class="panel-heading">
									<h3 class="panel-title">Center Cut</h3>
									<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
								</div>
								<div class="panel-body" id="p1">
								<div id="f3">
									<div class="thumbnail text-center" style="height:auto; width:50px; float:left; margin: 5px 5px 5px 5px;">
											<a id="" value="oval" role="button"><img src="http://placehold.it/50x50" alt=""></a>							
									</div>
									<div class="thumbnail text-center" style="height:auto; width:50px; float:left; margin: 5px 5px 5px 5px;">
											<a id="" value="heart" role="button"><img src="http://placehold.it/50x50" alt=""></a>							
									</div>
									<div class="thumbnail text-center" style="height:auto; width:50px; float:left; margin: 5px 5px 5px 5px;">
											<a id="" value="square" role="button"><img src="http://placehold.it/50x50" alt=""></a>							
									</div>
								</div>
								</div>
						</div>
					
					</div>
					
				</div>
			</div>
           
        </div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default" >
					<div class="panel-body" style="height:145px; overflow-x: scroll; overflow-y: hidden; white-space:nowrap;">
					<div id="f4">
					<?php $er=[1,2,1,1,2];?>
					<?php for($r=0;$r<5;$r++): ?>
						<div class="thumbnail text-center" style="height:auto; width:100px; display:inline-block; margin: 5px 5px 5px 5px;">
							<a id="<?php echo $r; ?>" value="<?php echo $er[$r]; ?>" role="button"><img src="http://placehold.it/100x100" alt=""></a>							
						</div>
					<?php endfor;?>
					</div>
					</div>
					
				</div>
			</div>
		
		</div>
       
        <!-- Footer -->
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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script>
	$('.panel-heading span.clickable').parents('#pan').find('#p1').slideUp();
	$('.panel-heading span.clickable').addClass('panel-collapsed');
	$('.panel-heading span.clickable').find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
			
	$(document).on('click', '.panel-heading span.clickable', function(e){
		var $this = $(this);
		if(!$this.hasClass('panel-collapsed')) {
			$this.parents('#pan').find('#p1').slideUp();
			$this.addClass('panel-collapsed');
			$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
		} else {
			$this.parents('#pan').find('#p1').slideDown();
			$this.removeClass('panel-collapsed');
			$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
		}
	});
	$(document).ready(function(){
	$('#f1 a').on('click',function(){
		var value=$(this).attr('value');
		alert(value);
		
		
	});
	$('#f2 a').on('click',function(){
		var value=$(this).attr('value');
		var id=$(this).attr('value');
		alert(value);
		//ajax php code for getting gem details from db
		
		
	});
	
	$('#f3 a').on('click',function(){
		var value=$(this).attr('value');
		alert(value);
		
		
	});
	
	$('#f4 a').on('click',function(){
		var value=$(this).attr('value');
		alert(value);
		
		
	});
	});
	</script>
</body>

</html>

