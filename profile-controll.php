<?php
//session_start();
require_once 'init.php';
?>
<html>

<head>
	<script type="text/javascript">
		/*function reDirect(){
			window.location="profile.php";
		}

		setTimeout('reDirect()',5000);*/
	</script>
</head>

<body>

<?php
if(isset($_POST["name"])){
	$name=$_POST["name"];

$sql = "UPDATE customerlogin SET username='$name' WHERE id=7";
//$_SESSION["new_name"] = $sql;

if(mysql_query($sql)){
	echo 'done';
	exit();
}
else{
	echo 'undone';
	exit();
}
}

if (isset($_POST["pword"])) {
	$name = $_POST["pword"];

	$sql2 = "UPDATE customerlogin SET password='$name' WHERE id=7";

	if (mysql_query($sql2)) {
		echo "done-updated";
		exit();
	}else{
		echo "fail";
		exit();
	}
}

if (isset($_POST["email"])) {
	$name = $_POST["email"];

	$sql3 = "UPDATE customerlogin SET email='$name' WHERE id=7";

	if (mysql_query($sql3)) {
		echo "done-updated2";
		exit();
	}else{
		echo "fail";
		exit();
	}
}

//$name_sql = "UPDATE `customerlogin` SET `username` = 'name' WHERE `id` = 7";
//$name_sql_run = mysql_query($name_sql);






/*upload image to the database */

$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uplaodOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($check !== false) {
		echo "file is an image - ".$check["mime"]."."."<br>";
		$uplaodOk = 1; 
	}else{
		echo "file  is not an image";
		$uplaodOk = 0;
	}
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	$query_upload = "UPDATE `customerlogin` SET `pro_pic` = '$target_file' WHERE `username`='{$_SESSION['username']}'";
	mysqli_query($link,$query_upload) or die("error in uplaod".mysql_error());
}else{
	exit("error while uploading to the server");
}

$select_query = "SELECT `pro_pic` FROM `customerlogin` WHERE `username`='{$_SESSION['username']}' ";
$sql_run = mysqli_query($link,$select_query) or die(mysql_error());
while ($row = mysql_fetch_array($sql_run)) {
	$image_name = $row['pro_pic'];
	//echo $image_name;
	$file=$_FILES['fileToUpload']['name'];
	//echo <img src=$row['image_url']."fileToUpload"/>;
	echo "<img src='$image_name.'/'.$file'/>";
	//echo "profile pic changed";
	?>
	<!--<script type="text/javascript">
		parent.document.getElementById('propic').innerHTML="<img id='propic1' class='thumbnail text-center' style='height:150px; width:150px;margin: 20px 90px 20px 90px;' src=' uploads/ <?php echo $file; ?>' />";
	</script>-->
	<?php

}


?>
</body>
</html>
