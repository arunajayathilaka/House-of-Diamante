<?php
	require_once 'init.php';
	require_once 'chatfunc.php';
	$sender=$_SESSION['username'];
	$receiver=$_SESSION['receiver1'];
	$messages=get_msg($sender,$receiver);
	foreach($messages as $message){
	echo '
	<li class="media">

		<div class="media-body">

			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object img-circle " src="assets/img/user.png" />
				</a>
				<div class="media-body" >
				'.$message['message'].'
				<br />
				<small class="text-muted">'.$message['sender'].'| 23rd June at 5:00pm</small>
				<hr />
			    </div>
		    </div>

		</div>
	</li> ';
	}
?>