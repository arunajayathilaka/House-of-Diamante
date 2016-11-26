<?php
	session_start();
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "";
	$dbname = "hod-new";
	//$_SESSION['username']="mythree";
	mysqli_connect("$servername","$mysqlusername","$password","$dbname")
        or die("couldn't connect db");
	$link=new mysqli("localhost","root","","hod-new");
?>