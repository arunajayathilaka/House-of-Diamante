<!DOCTYPE html>
<html>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
$color ="red";
$color1="yellow";
echo "my car is $color1 and  " .$color."<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
	echo "gh";
    $email = $_POST['fname'];
    //$password=$_POST["p"];
	if (empty($email)) {
        echo "Name is empty";
    } else {
        echo $email;
    }
	//$email="mythree@gmail.com";
	//$password="mythree";
}
?>
</body>
</html>