<?php 
$db_host = 'localhost'; 
$db_user = 'admin'; 
$db_pass = '1234'; 
$db_database = 'bd_daniil'; 
$link = new mysqli($db_host,$db_user,$db_pass,$db_database); 
mysqli_query($link,'SET NAMES utf8'); 
mysqli_query($link,'SET CHARACTER SET utf8'); 
mysqli_query($link,'SET COLLATION_CONNECTION="utf8_general_ci"'); 
?>
