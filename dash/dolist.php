<?php
    require 'init.php';
    if(isset($_POST['dol'])){
        $sqldo = "INSERT INTO dolist(task) VALUES('{$_POST['dol']}')";
        
        echo mysql_query($sqldo);
    }
    if(isset($_POST['inputdo'])){
        $sqldodel = "DELETE FROM dolist WHERE doID = {$_POST['inputdo']}";
        mysql_query($sqldodel);
    }
?>