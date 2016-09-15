<?php
	require_once 'init.php';
	require_once 'chatfunc.php';
	
	//add vendor name from making database query 
	/*
	
	*/
	
	if(isset($_POST['receiverid'])){
		if($_POST['receiverid']!=""){
			$re=$_POST['receiverid'];
		}
	}
	else{
			//start with that receiver
			$re="";
		}
	if(!empty($_SESSION['username'])){
	$sender=$_SESSION['username'];
	$receiver=$re;
	$messages=get_msg($sender,$receiver);
	foreach($messages as $message){
		if($message['sender']==$sender){
			echo '
	<li class="media">

		<div class="media-body">

			<div class="media">
				<a class="pull-right" href="#">
					<img class="media-object img-circle " src="img/users/user.png" />
				</a>
				<div class="pull-right" class="media-body" >
				'.$message['message'].'
				<br />
				<small class="text-muted">'.$message['sender'].'| '.$message['updated_date'].' at '.$message['updated_time'].' </small>
				
			    </div>
			
		    </div>

		</div>
	</li> 
	<hr />';
		}
		else{
			echo '
	<li class="media">

		<div class="media-body">

			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object img-circle " src="img/users/user0.png" />
				</a>
				<div class="media-body" >
				'.$message['message'].'
				<br />
				<small class="text-muted">'.$message['sender'].'| '.$message['updated_date'].' at '.$message['updated_time'].'</small>
				
			    </div>
			
		    </div>

		</div>
	</li> 
	<hr />';
		}
	
	}
	}
?>