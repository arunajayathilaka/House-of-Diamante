<?php
session_start();
$servername = "localhost";
$mysqlusername = "root";
$password = "";
$dbname = "houseofdiamante";
$email="";
$password="";
$username="";
// Create connection
@mysql_connect("$servername","$mysqlusername","$password");
@mysql_select_db("$dbname") or die("couldn't connect db");

$passkey=$_GET['passkey'];

$result = mysql_query("SELECT * FROM temp_customerlogin WHERE confirm_code LIKE '%{$passkey}%'");

while ($row = mysql_fetch_array($result))
{		
        if($passkey==$row['confirm_code']){
        	 
			$email=$row['email'];
			$username=$row['username'];
			$password=$row['password'];
			$sql1="INSERT INTO customerlogin (username,email,password)
					VALUES ('$username', '$email', '$password')";
        }
        else{
        	
			echo "wrong comfirmation";
        }
}



if(mysql_query($sql1)){
	$_SESSION['er']="true";
	$_SESSION['emailn']="$email";
	header("Location: index.php");
}
else{
	echo "not add to table";
	
}
 mysql_close();
?>