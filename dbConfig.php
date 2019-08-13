<?php
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "phmysqldb.mysql.database.azure.com", "prabaharanh@phmysqldb", "Radhah@5969", "dblogin", 3306);
?>
