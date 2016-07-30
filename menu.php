<?php

	
	if($_SESSION['er1']=="false"){
		echo
			'<li class="l2"><a href="javascript:void(0);" onclick="myFunction2()">Sign Up </a></li>
			<li class="l2"><a href="javascript:void(0);" onclick="myFunction1()">Login</a></li>';
	}
	else{
		echo
			'<li class="l2"><a href="logout.php">Logout</a></li> 
			
			<li class="l2"><a href="#" style="background-color=none;"> <img src="http://placehold.it/18x18" class="profile-image">'.$_SESSION['emailn'].'</a></li>';
	}

?>		