<?php
	if(isset($_SESSION['username'])){
	$query=mysql_query("SELECT image_url FROM customerlogin WHERE username='{$_SESSION['username']}'");
	while($row1=mysql_fetch_array($query)){
		$row2=$row1;
	}
	}
	if($_SESSION['er1']=="false"){
		echo '
		<div class="row" id="authe" style="float:right;height:20px;" >
    			<a href="account-sign-in-up.php" style="text-decoration: none !important; cursor:pointer; margin-right:10px;" id="signin"><span class="glyphicon glyphicon-user"></span> Sign In</a>

    			<a href="account-sign-in-up.php" style="text-decoration: none !important; cursor:pointer; margin-right:20px;" id="login"><span class="glyphicon glyphicon-log-in"></span> Log In</a>
	    </div>';
		
	}
	else{
		echo '
		<div class="row" id="authe" style="float:right;height:20px;" >
    			
    			<a href="#" style="background-color=none;text-decoration: none !important; cursor:pointer;margin-right:10px;"><span> <img src="'.$row2['image_url'].'" class="media-object img-circle pull-left" style="margin-right:4px; width:10%;"><span>'.$_SESSION['emailn'].'</a>
				<a href="logout.php" src="#" style="text-decoration: none !important; cursor:pointer; margin-right:10px;" id="signin" ><span class="glyphicon glyphicon-user"></span> Log Out</a>

		</div>';
		
		
		
	}

?>		