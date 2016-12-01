<?php
	
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "";
	$dbname = "houseofdiamante";
	@mysql_connect("$servername","$mysqlusername","$password");
	@mysql_select_db("$dbname") or die("couldn't connect db");
	
?>