<?php
	require_once 'init.php';
	require_once 'chatfunc.php';
	
	if(isset($_GET['receiverid'])){
		if($_GET['receiverid']!=""){
			$re=$_GET['receiverid'];
		}
	}
	
		
	$sender=$_SESSION['username'];
	$receiver=$re;
	 if(isset($_GET['message']) && !empty($_GET['message'])){
		$message=$_GET['message'];
		if(send_msg($sender,$receiver,$message)){
			echo 'sent';
		}
		else{
			echo 'message not sent';
		}
	 }
	 else{
		echo 'no message';
	 }
	
 
?>