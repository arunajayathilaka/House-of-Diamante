<?php 
require_once'init.php' ;


if(isset($_POST['ringtype'])){
	$ringid = $_POST['ringtype'];


$sql3q=mysql_query("SELECT image_url FROM ringtype WHERE id='$ringid'");
while($row=mysql_fetch_array($sql3q)){
 $ringtyperow=$row;	
}

if(@count($ringtyperow) != 0 ){
	echo '<img style="height:30%;"src="'.$ringtyperow['image_url'].'">';
}
else{
	echo '<img src="http://placehold.it/50x100">';
}
}
?>