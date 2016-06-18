<?php
require("checklogin.php"); 
 unset($_SESSION['er']);
 header("Location: index.php"); 
 ?>