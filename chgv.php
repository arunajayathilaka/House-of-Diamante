<?php
function er(){
	static $e=5;
		if($e==5){
			$_SESSION['receiver1']="ranil";
			$e=3;
		}
}
	
?>