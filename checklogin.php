<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "houseofdiamante";
$email="";
$password="";
// Create connection
@mysql_connect("$servername","$username","$password");
@mysql_select_db("$dbname") or die("couldn't connect db");
// Check connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
	
    $email = $_POST["u"];
    $password=$_POST["p"];
	
}

//$email="mythree@gmail.com";
//$password="mythree1";
$result = mysql_query("SELECT * FROM customerlogin WHERE email LIKE '%{$email}%'");

while ($row = mysql_fetch_array($result))
{		
        if($password==$row['password']){
        	 $_SESSION['er']="true";
			 $_SESSION['emailn']="$email";
			 header("Location: index.php");
        }
        else{
        	
			header("Location: login.php");
        }
		 //include 'index.php';

}
    mysql_close();
?>