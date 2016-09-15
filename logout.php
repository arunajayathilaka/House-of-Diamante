<?php
//session_start();
require("checklogin.php"); 
 unset($_SESSION['er']);
 unset($_SESSION['username']);
 unset($_SESSION['emailn']);
 header("Location: index.php"); 
 ?>