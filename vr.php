
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Virtual Mirror</title>

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
			<div class="col-md-8">
			
				<div class="panel panel-default" style="height:380px; margin-top:20px;">
					<div class="panel-body">
						<canvas id="display" width="715" height="345" style="position:absolute; "></canvas>
						<canvas id="photo" width="715" height="345" style="position:absolute; "></canvas>
					
						<div class="text-right">

						</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-1 ">
				
					
						
						<a role="button" class="btn btn-primary btn-sm center-block" style="margin-top:80px;" id="takePhoto" value="Click"><img class="img1" src="./img/camera.png" alt="" style="width:25% height:25%"></a>
						
						<a role="button" class="btn btn-primary btn-sm center-block" style="margin-top:10px;" id="takePhoto2" value="Click"><img class="img1" src="./img/back.png" alt="" style="width:25% height:25%"></a>
						
					
			</div>
			<div class="col-md-3">			
				<div class="panel panel-default" style="height:380px; margin-top:20px;">
				<div class="panel-body">
					<div class="span12" style="text-align: center">
						<h1>Virtual Mirror</h1>
					</div>	<center>
						   <li>Allow the web site to use web cam</li>
						   <li>Select the jewellery you need</li>
						   <li> Selected item will place customer's appeared body part virtually (ex:-hand with the ring)</li>
							<center>
					
				</div>
				
						
			</div>
			</div>
			
        </div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default" >
					<div class="panel-body" style="height:140px; overflow-x: scroll; overflow-y: hidden; white-space:nowrap;">
					<div id="f4">
					<?php $er=[1,2,1,1,2];?>
					<?php for($r=0;$r<5;$r++): ?>
						<div class="thumbnail text-center" style="height:auto; width:100px; display:inline-block; margin: 2px 5px 5px 5px;">
							<a id="<?php echo $r; ?>" value="<?php echo $er[$r]; ?>" role="button"><img src="http://placehold.it/100x100" alt=""></a>							
						</div>
					<?php endfor;?>
					</div>
					</div>
					
				</div>
			</div>
		
		</div>
       
        <!-- Footer 
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
		</footer>-->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="js/fabric.min.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script>
		
	</script>
</body>

</html>

