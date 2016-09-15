<?php

require_once 'init.php';

$passkey=$_GET['passkey'];

$result = mysql_query("SELECT * FROM temp_customerlogin WHERE confirm_code LIKE '%{$passkey}%'");

while ($row = mysql_fetch_array($result))
{		
        if($passkey==$row['confirm_code']){
        	 
			$email=$row['email'];
			$username=$row['username'];
			$password=$row['password'];
			$sql1="INSERT INTO customerlogin (username,email,password,image_url)
					VALUES ('$username', '$email', '$password','http://placehold.it/50x50')";
			@mysql_query("DELETE FROM temp_customerlogin WHERE username='{$username}'");
        }
        else{
        	
			echo "wrong comfirmation";
        }
}



if(mysql_query($sql1)){
	$_SESSION['er']="true";
	$_SESSION['emailn']="$email";
	$_SESSION['username']="$username";
	header("Location: index.php");
}
else{
	echo "not add to table";
	
}
 mysql_close();
?>