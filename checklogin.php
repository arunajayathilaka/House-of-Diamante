<?php
session_start();
require_once 'init.php';

// Check connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
	
    $email = $_POST["u"];
    $password=$_POST["p"];
	
}


//make a query for selecting email that user entered
$result = mysql_query("SELECT * FROM customerlogin WHERE email='{$email}'");
$er=true;
while ($row = mysql_fetch_array($result))
{	
		$er=false;
        if($password==$row['password']){
        	 $_SESSION['er']="true";
			 $_SESSION['emailn']="$email";
			 $_SESSION['username']=$row['username'];
			 header("Location: index.php");
        }
        else{
        	
			header("Location: login.php");
        }
	
}
if($er){
header("Location: login.php");}

    mysql_close();
?>