<?php>
	$articlesQuery=mysql_query("SELECT COUNT(articles_likes.id) AS loves FROM articles
								LEFT JOIN articles_likes ON articles.id = articles_likes.article GROUP BY articles.id");

?>