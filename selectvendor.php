<?php

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		if(isset($_SESSION['receiver1'])){
			//unset($_SESSION['receiver']);
			$_SESSION['receiver1']="ss";
		}
		else{
			$_SESSION['receiver1']="s1s";
		}
		header("Location: profile.php");
	}
?>