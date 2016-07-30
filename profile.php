<?php
 require_once 'core.inc.php';
 $_SESSION['receiver1']="ranil";
?>

<html>
	
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
	<link href="css/profile.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="#">Sign Up</a></li>
				  <li><a href="#">Login</a></li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 sidenav">
				
				<div class="row" style="background-color:grey">
					<img align="center" class="fb-image-profile thumbnail" src="#" alt="Profile image example"/>
					<br>
				</div>
				
				<div class="row">
					<h1 class="text-center">Info</h1>
					<p class="text-center">Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
				</div>
			  <!---  <div class="fb-profile" >
			   
					<img align="left" class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
					
				</div>
				<div class="fb-profile-text">
				<br>
				<h1>Info<h1>
					 </div>-->
					 
			
			</div>
				
			
			
			<div class="col-sm-9 sidenav" >
				<br>
				<div class="row">
					<ul class="nav nav-tabs" style="margin-left: 50px;">
					  <li><a href="#menu1">Profile</a></li>
					  <li><a href="#menu2">Notification <span class="badge">42</span></a></li>
					  
					  <li class="active"><a href="#menu3">Messages <span class="badge">3</span></a></li>
					  <li><a href="#menu4">Settings</a></li>
					</ul>
				</div>
				<br><br>
				<div class="tab-content">
					<div id="menu3" class="tab-pane fade in active">
						<div class="col-md-8">
							
							<div class="panel panel-info">
								<div class="panel-heading">
								
									RECENT CHAT 
								</div>
								<div class="panel-body"  style="height: 280px; overflow-y: scroll;">
													<ul class="media-list" id="messages">
																											  
													</ul>
								</div>
								<div class="panel-footer">
									<form action="#" method="get" id="form_input">
										<div class="input-group">
									
														<input type="text" class="form-control" name="message" id="message" placeholder="Enter Message" />
														<span class="input-group-btn">
															<button class="btn btn-info" id="send" name="send" type="submit">SEND</button>
														</span>
														
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							
							  <div class="panel panel-primary">
								<div class="panel-heading">
								   VENDORS
								</div>
								<div class="panel-body" style="height: 280px; overflow-y: scroll;">
													<ul class="media-list">

														<li class="media">
														
															<div class="media-body">

																<div class="media">
																	<a class="pull-left" href="selectvendor.php?id=112">
																		<img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
																	</a>
																	<div class="media-body" >
																		<h5>Alex Deo | User </h5>
																		
																	   <small class="text-muted">Active From 3 hours</small>
																	</div>
																</div>

															</div>
														
														</li>
														
													</ul>
									</div>
								</div>
							
						</div>
					</div>
					
					<div id="menu2" class="tab-pane fade">
						<p>rt</p>
					</div>
					
					<div id="menu1" class="tab-pane fade">
						<h1>rt</h1>
					</div>
					
					<div id="menu4" class="tab-pane fade">
						<h1>rt</h1>
					</div>
					
					
				</div>
								
								<hr>
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
	<script src="js/auto_chat.js"></script>
	<script src="js/send.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
	});
	</script>

</body>

</html>