<?php
	require_once 'init.php';
	require_once 'updateRate.php';
	if(isset($_POST['rate']) && isset($_POST['shopvendor'])){
		$rate=$_POST['rate'];
		$shopvendor=$_POST['shopvendor'];
	
	
	$query = mysql_query("SELECT * FROM rating where rating.user= '{$_SESSION['username']}' AND rating.vendor_username='{$shopvendor}'  "); 
	while($data = mysql_fetch_assoc($query)){
    $rate_db[] = $data;
	}
	
	if(@count($rate_db) == 0 ){
    mysql_query("INSERT INTO rating (id,user,vendor_username,rate)VALUES(null,'{$_SESSION['username']}' , '$shopvendor','$rate')");
	}
	else{
    mysql_query("UPDATE rating SET rate= '$rate' WHERE user = '{$_SESSION['username']}' AND rating.vendor_username='{$shopvendor}'");
	}
	
	$rateRatio=updaterate($shopvendor);
	echo ''.$rateRatio.'';
	
	}
?>