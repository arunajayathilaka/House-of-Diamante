<?php 
require_once'init.php' ;


if(isset($_POST['submit'])){
	
	if(isset($_POST['name1'])&& ($_POST['name1']!=null) ){
		$name = $_POST['name1'];
		$sql = "UPDATE vendor SET vendor_username ='$name' WHERE vId = 1 ";
		mysql_query($sql);
	}
	if(isset($_POST['confirm-password'])&& isset($_POST['current-password'])&&isset($_POST['new-password'])){
		if(($_POST['confirm-password']!=null)&&($_POST['current-password']!=null)&&($_POST['new-password']!=null) ){
			$curr = mysqli_query($conn,"SELECT vPassword FROM vendor WHERE vId = 1"); 
			if(($_POST['current-password'])== mysql_fetch_array($curr)["vPassword"]){
				$pass = $_POST['confirm-password'];
				$sql = "UPDATE vendor SET vendor_password ='$pass' WHERE id = 1 ";
				mysql_query($sql);
			}
		}
		
	}
	if(isset($_POST['address'])&& ($_POST['address']!=null) ){
		$add = $_POST['address'];
		$sql = "UPDATE vendor SET vAddress ='$add' WHERE id = 1 ";
		mysql_query($sql);
	}
	if(isset($_POST['contact'])&& ($_POST['contact']!=null) ){
		$tel = $_POST['contact'];
		if(strlen($tel)==10 ||strlen($tel)==7){
			$sql = "UPDATE vendor SET telephone ='$tel' WHERE id = 1 ";
			mysql_query($sql);
		}
		
	}
	if(isset($_POST['email'])&& ($_POST['email']!=null) ){
		$em = $_POST['email'];
		$sql = "UPDATE vendor SET vendor_email ='$em' WHERE id = 1 ";
		mysql_query($sql);
	}
	
	
}




?>