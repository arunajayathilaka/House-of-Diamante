<?php
session_start();
?>
<html>
<head>
<title>HOD</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/home.css">
 <link rel="stylesheet" type="text/css" href="css/loginForm.css">
 <link rel="stylesheet" type="text/css" href="css/registerForm.css">
 <link rel="stylesheet" type="text/css" href="css/home1.css">
 
</head>
<body>
	
		<div class="s1">
			<?php 
			if(isset($_SESSION['er']) && $_SESSION['er']=="true"){$_SESSION['er1']="true";}
			else{$_SESSION['er1']="false";}?>
			<?php include 'menu.php' ?>
		
	    </div>
	    
		<div class="login-block1">
		<?php include 'registerForm.php'?>
			
		</div>	
		<div class="login-block">
		<?php include 'loginForm.php'?>
		</div>
	<div class="container2">
			<div class="row " id="MainMenu">
				<div class="list-group panel visible-xs">
					
							<a id="list1"href="#why"class="icon list-group-item" data-toggle="collapse" data-parent="#MainMenu"  style="font-size:25px;" > <i id="list0" class="glyphicon glyphicon-th-list" ></i></a>
						
							
							<div class="collapse" id="why">
									<a id="list2"href="#home" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Showcase</a>
									<a id="list2" href="#news" class="list-group-item" >Design</a>
									<a id="list2" href="#contact" class="list-group-item" >Vmirror</a>
									<a id="list2"href="#about" class="list-group-item" >Photohub</a>
									
							</div>
				
				</div>
				
				<div class="col-sm-4  hidden-xs ">
							<a id="list3" href="#home" class="list-group-item  " data-toggle="collapse">Showcase</a>
							<a id="list3" href="#news" class="list-group-item " data-toggle="collapse">Design</a>
							<a id="list3" href="#contact" class="list-group-item " data-toggle="collapse">Vmirror</a>
							<a id="list3" href="#about" class="list-group-item  " data-toggle="collapse"> <i class="glyphicon glyphicon-camera" ></i> Photohub</a>

				</div>
				
				<div class="col-sm-8 " id="slider1">
					<a href="#">
						<img src="img/sliders/1.jpg" />
					</a>
					<a href="#">
						<img src="img/sliders/2.jpg"/>
					</a>
					<a href="#">
						<img src="img/sliders/3.jpg"/>
					</a>
					<a href="#">
						<img src="img/sliders/4.jpg"/>
					</a>
					<a href="#">
						<img src="img/sliders/5.jpg"/>
					</a>
					<a href="#">
						<img src="img/sliders/6.jpg"/>
					</a>
				</div>
			
			</div>
		</div>
    <div class="logo-wrap">
    	<img src="img/logo2.png" alt="logo" >
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/home.js"></script>
<script src="js/slider.js"></script>


</body>
</html>
