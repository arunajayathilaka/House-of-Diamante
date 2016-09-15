<?php
	session_start();
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "";
	$dbname = "houseofdiamante";
	//$_SESSION['username']="mythree";
	@mysql_connect("$servername","$mysqlusername","$password");
	@mysql_select_db("$dbname") or die("couldn't connect db");
	
?>