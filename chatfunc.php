<?php
	function get_msg($sender,$receiver){
		$query ="SELECT chat.sender,chat.receiver,chat.message,chat.updated_time,chat.updated_date FROM chat WHERE chat.sender='{$sender}' AND chat.receiver='{$receiver}' OR chat.sender='{$receiver}' AND chat.receiver='{$sender}'";
		$run =mysql_query($query);
		$messages=array();
		while($message =mysql_fetch_array($run)){
			$messages[]=array('sender'=>$message['sender'],
			'message'=>$message['message'], 'updated_date'=>$message['updated_date'],'updated_time'=>$message['updated_time']);
		}
		return $messages;
	}
	
	function send_msg($sender,$receiver,$message){
		if(!empty($sender) && !empty($receiver) && !empty($message)){
			$sender =mysql_real_escape_string($sender);
			$message =mysql_real_escape_string($message);
			$receiver =mysql_real_escape_string($receiver);
			$date=date("Y-m-d");
			date_default_timezone_set("Asia/Colombo");
			$time=date("h:i:sa");
			$query ="INSERT INTO chat(msg_ID,sender,receiver,message,updated_date,updated_time) VALUES(null,'{$sender}','{$receiver}','{$message}','{$date}','{$time}')";
			
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