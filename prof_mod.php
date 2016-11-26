<?php

require_once 'init.php';



$name = $_POST['uname'];
$email = $_POST['cemail'];
$cpwd = $_POST['cpwd'];
$npwd = $_POST['npwd'];



if(!(empty($cpwd))){

	$query = "select password from customerlogin where email='{$_SESSION['email']}'";
	$query_run = mysqli_query($link,$query);
	$row = mysqli_fetch_assoc($query_run);
	$pw = $row['password'];
	if ($pw != $cpwd) {
		echo "password incorrect!";
		exit();
	}else{

		$sql1 = "update customerlogin set username = '$name' where username='{$_SESSION['username']}'";
		if(mysqli_query($link,$sql1)){
			//echo "done";
			$_SESSION['username'] = $name;
			

		}else{
			exit();
		}

		$sql2 = "update customerlogin set email = '$email' where email='{$_SESSION['email']}'";
		mysqli_query($link,$sql2);
		//$_SESSION['email'] = $email;
		//echo $_SESSION['email'];

		$sql3 = "update customerlogin set password = '$npwd' where email='$email'";
		mysqli_query($link,$sql3);
		echo "succusfully changed!";
		//print_r($_SESSION);

	}

}else{
	echo "enter your current password";
	exit();
}

//print_r($_SESSION);


?>