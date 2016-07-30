<?php
	function get_msg($sender,$receiver){
		$query ="SELECT chat.sender,chat.receiver,chat.message FROM chat WHERE chat.sender='{$sender}' AND chat.receiver='{$receiver}' OR chat.sender='{$receiver}' AND chat.receiver='{$sender}'";
		$run =mysql_query($query);
		$messages=array();
		while($message =mysql_fetch_array($run)){
			$messages[]=array('sender'=>$message['sender'],
			'message'=>$message['message']);
		}
		return $messages;
	}
	
	function send_msg($sender,$receiver,$message){
		if(!empty($sender) && !empty($receiver) && !empty($message)){
			$sender =mysql_real_escape_string($sender);
			$message =mysql_real_escape_string($message);
			$receiver =mysql_real_escape_string($receiver);
			
			$query ="INSERT INTO chat(msg_ID,sender,receiver,message) VALUES(null,'{$sender}','{$receiver}','{$message}')";
			
			if($run=mysql_query($query)){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}
?>