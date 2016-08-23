<?php

require_once 'init.php';
$user=$_SESSION['username'];
$articlesQuery1=mysql_query("SELECT articles.id,articles.title,COUNT(articles_likes.id) AS likes,COUNT(articles_love.id) AS loves,COUNT(articles_haha.id) AS hahas FROM articles
LEFT JOIN articles_likes ON articles.id = articles_likes.article LEFT JOIN articles_love ON articles.id = articles_love.article
LEFT JOIN articles_haha ON articles.id = articles_haha.article GROUP BY articles.id");

$articlesQuery2=mysql_query("SELECT articles.id,articles.title,COUNT(articles_love.id) AS loves FROM articles
LEFT JOIN articles_love ON articles.id = articles_love.article GROUP BY articles.id");

$articlesQuery3=mysql_query("SELECT articles.id,articles.title,COUNT(articles_haha.id) AS hahas FROM articles
LEFT JOIN articles_haha ON articles.id = articles_haha.article GROUP BY articles.id");

$likesq=mysql_query("SELECT articles_likes.article FROM articles_likes WHERE articles_likes.user='{$user}'");
$loveq=mysql_query("SELECT articles_love.article FROM articles_love WHERE articles_love.user='{$user}'");
$hahaq=mysql_query("SELECT articles_haha.article FROM articles_haha WHERE articles_haha.user='{$user}'");

while($row1=mysql_fetch_array($articlesQuery1)){
	$articles1[]=$row1;
}

while($row2=mysql_fetch_array($likesq)){
	$likesarr[]=$row2['article'];
}

while($row3=mysql_fetch_array($loveq)){
	$lovearr[]=$row3['article'];
}
while($row4=mysql_fetch_array($hahaq)){
	$hahaarr[]=$row4['article'];
}
//echo '<pre>',print_r($articles1,true),'<pre>';
?>

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

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
			
            <div class="col-lg-12">
                <h1 class="page-header">Diamante Photohub</h1>
            </div>
			<?php foreach($articles1 as $article1):?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <div class="thumbnail">
                
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                
                <div class="caption">
                    <h3><?php echo $article1['title']; ?></h3>
                   
                    <p>
					<?php if(in_array($article1['id'],$likesarr)):?>
					<a value="like" id="<?php echo $article1['id']; ?>" class="btn btn-default btn-sm active" role="button"><img class="img1" src="./img/like.png" alt="" style="width:25% height:5%"></a> 
					<span class="badge"><?php echo $article1['likes']; ?> </span>
					<?php else: ?>
					<a value="like" id="<?php echo $article1['id']; ?>" class="btn btn-default btn-sm" role="button"><img class="img1" src="./img/like.png" alt="" style="width:25% height:5%"></a> 
					<span class="badge"><?php echo $article1['likes']; ?> </span>
					<?php endif; ?>
					
					
					<?php if(in_array($article1['id'],$lovearr)):?>
					<a value="love" id="<?php echo $article1['id']; ?>" class="btn btn-default btn-sm active" role="button"><img class="img1" src="./img/heart.png" alt="" style="width:25% height:5%"></a>
					<span class="badge"><?php echo $article1['loves']; ?></span>
					<?php else: ?>
					<a value="love" id="<?php echo $article1['id']; ?>" class="btn btn-default btn-sm" role="button"><img class="img1" src="./img/heart.png" alt="" style="width:25% height:5%"></a>
					<span class="badge"><?php echo $article1['loves']; ?></span>
					<?php endif; ?>
					
					<?php if(in_array($article1['id'],$hahaarr)):?>
					<a value="haha" id="<?php echo $article1['id']; ?>" class="btn btn-default btn-sm active" role="button"><img class="img1" src="./img/smile.png" alt="" style="width:25% height:5%"></a>
					<span class="badge"><?php echo $article1['hahas']; ?></span>
					<?php else: ?>
					<a value="haha" id="<?php echo $article1['id']; ?>" class="btn btn-default btn-sm" role="button"><img class="img1" src="./img/smile.png" alt="" style="width:25% height:5%"></a>
					<span class="badge"><?php echo $article1['hahas']; ?></span>
					<?php endif; ?>
					</p>
					<p><?php echo $article1['likes']; ?> people liked</p>
				</div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <hr>

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
	<script src="js/photohub.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

