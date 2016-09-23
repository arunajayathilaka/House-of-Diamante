<?php 
require_once 'init.php';

$not_id = $_POST['no_id'];
$query = "UPDATE `notification` SET `view` = 'yes' where `customer` = 'Tharindu' AND `not_id` = ".$not_id.";";
if($query_run = mysql_query($query)){
	echo "viewed";

}else{
	echo "failed";
}


?>