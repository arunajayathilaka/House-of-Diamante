<?php
	require_once 'init.php';
	
	if(isset($_GET['type']) && isset($_GET['id'])){
		$type=$_GET['type'];
		$id=(int) $_GET['id'];
	
	switch($type){
			case 'like':
			$qr=mysql_query("SELECT COUNT(id) AS likes FROM articles_likes WHERE user='{$_SESSION['username']}' AND article_id='{$id}'");
								
			$row1=mysql_fetch_array($qr);
			
			if(mysql_query("SELECT id FROM articles WHERE id='{$id}'") and $row1['likes']<1){
				@mysql_query("INSERT INTO articles_likes (user,article_id) VALUES ('{$_SESSION['username']}','{$id}')");
				
			}
			$articlesQuery1=mysql_query("SELECT COUNT(articles_likes.id) AS likes FROM articles LEFT JOIN articles_likes ON articles.id = articles_likes.article_id WHERE articles.id='{$id}' GROUP BY articles.id");
			$row2=mysql_fetch_array($articlesQuery1);
			echo $row2['likes'];	
			break;
		
		
			case 'love':
			$qr=mysql_query("SELECT COUNT(id) AS loves FROM articles_love WHERE user='{$_SESSION['username']}' AND article_id='{$id}'");
			
			$row1=mysql_fetch_array($qr);
			
			if(mysql_query("SELECT id FROM articles WHERE id='{$id}'") and $row1['loves']<1){
				@mysql_query("INSERT INTO articles_love (user,article_id) VALUES ('{$_SESSION['username']}','{$id}')");
				//echo $row2['loves'];
			}
			$articlesQuery1=mysql_query("SELECT COUNT(articles_love.id) AS loves FROM articles LEFT JOIN articles_love ON articles.id = articles_love.article_id WHERE articles.id='{$id}' GROUP BY articles.id");
			$row2=mysql_fetch_array($articlesQuery1);
			echo $row2['loves'];	
			break;
		
			case 'haha':
			$qr=mysql_query("SELECT COUNT(id) AS hahas FROM articles_haha WHERE user='{$_SESSION['username']}' AND article_id='{$id}'");
			
			$row1=mysql_fetch_array($qr);
			
			if(mysql_query("SELECT id FROM articles WHERE id='{$id}'") and $row1['hahas']<1){
				@mysql_query("INSERT INTO articles_haha (user,article_id) VALUES ('{$_SESSION['username']}','{$id}')");
				//echo $row2['hahas'];
			}
			$articlesQuery1=mysql_query("SELECT COUNT(articles_haha.id) AS hahas FROM articles LEFT JOIN articles_haha ON articles.id = articles_haha.article_id WHERE articles.id='{$id}' GROUP BY articles.id");
			$row2=mysql_fetch_array($articlesQuery1);
			echo $row2['hahas'];	
			break;
		}
	}
?>