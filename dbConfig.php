<?php
define ("DB_HOST", "phmysqldb.mysql.database.azure.com"); 
define ("DB_USER", "prabaharanh@phmysqldb"); 
define ("DB_PASS", "Radhah@5969"); 
define ("DB_NAME", "dblogin"); 

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make a test  connection.");
$db = mysqli_select_db($link, DB_NAME) or die("Couldn't select database");
?>
