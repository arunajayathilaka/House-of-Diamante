<?php
    require 'init.php';
    require 'session.php';
    
    $sqlcomman = "SELECT * FROM vendor WHERE vendor_email='{$_SESSION['login_user']}'";
    $rescomman = mysql_query($sqlcomman);
    $rowcomman = mysql_fetch_array($rescomman, MYSQL_ASSOC);
    if(isset($_POST['inputcus'])){
        
        $receiver = $rowcomman['vendor_name'];
        $sender = $_POST['inputcus']; 
        $query ="SELECT chat.sender,chat.receiver,chat.message,chat.updated_time,chat.updated_date FROM chat WHERE chat.sender='{$sender}' AND chat.receiver='{$receiver}' OR chat.sender='{$receiver}' AND chat.receiver='{$sender}'";
        $run =mysql_query($query);
        $count = mysql_num_rows($run);
        $messages=null; 
        while($message =mysql_fetch_array($run)){
                $messages[] = $message; 
        }
        if($count>0){
        foreach($messages as $mess){
            if($mess['sender']==$receiver){
            $me= '<li class="media">
                    <div class="media-body">

                            <div class="media">
                                    <a class="pull-right" href="#">
                                            <img class="media-object img-circle " src="img/users/user.png" />
                                    </a>
                                    <div class="pull-right" class="media-body" >
                                    '.$mess['message'].'
                                    <br />
                                    <small class="text-muted">'.$mess['sender'].'| '.$mess['updated_date'].' at '.$mess['updated_time'].' </small>

                                </div>
                        </div>

                    </div>
                </li> 
	<hr />';
        $messa = "{$me}";
        echo $messa;
            
        }else{
            $me = '<li class="media">

		<div class="media-body">

			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object img-circle " src="img/users/user0.png" />
				</a>
				<div class="media-body" >
				'.$mess['message'].'
				<br />
				<small class="text-muted">'.$mess['sender'].'| '.$mess['updated_date'].' at '.$mess['updated_time'].'</small>
				
			    </div>
			
		    </div>

		</div>
	</li> 
	<hr />';
            $messa = "{$me}";
            echo $messa; 
        }
      }
     }
    }
    if(isset($_POST['mes'])&& isset($_POST['to'])){
        $sender =  $rowcomman['vendor_name'];
        $receiver= $_POST['to'];
        $messageinp = $_POST['mes']; 
                
        if(!empty($sender) && !empty($receiver) && !empty($messageinp)){
			$sender =mysql_real_escape_string($sender);
			$messageinp =mysql_real_escape_string($messageinp);
			$receiver =mysql_real_escape_string($receiver);
			$date=date("Y-m-d");
			date_default_timezone_set("Asia/Colombo");
			$time=date("h:i:sa");
			$query ="INSERT INTO chat(sender,receiver,message,updated_date,updated_time) VALUES('{$sender}','{$receiver}','{$messageinp}','{$date}','{$time}')";
			
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