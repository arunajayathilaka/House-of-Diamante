<?php
	require_once 'init.php';
	
	if(isset($_GET['type'],$_GET['id'])){
		$type=$_GET['type'];
		$id=(int) $_GET['id'];
	
	switch($type){
		case 'article':
		$qr=mysql_query("SELECT COUNT(id) AS likes FROM articles_likes WHERE user='{$_SESSION['username']}' AND article='{$id}'");
		$row1=mysql_fetch_array($qr);
		if(mysql_query("SELECT id FROM articles WHERE id='{$id}'") and $row1['likes']<1){
			@mysql_query("INSERT INTO articles_likes (user,article) VALUES ('{$_SESSION['username']}','{$id}')");
			header("Location: photohub.php");
		}
	    	
		break;
	}
	}
?>