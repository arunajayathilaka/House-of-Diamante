<?php
	require_once 'init.php';
	require_once 'chatfunc.php';
	$sender=$_SESSION['username'];;
	$receiver=$_SESSION['receiver1'];
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