<?php 
 $db_server = 'localhost';
 $db_user = 'root';
 $db_password='';
 $db_name='laragigs';

 $conn=mysqli_connect($db_server,$db_user,$db_password,$db_name) or die('Connection Failed'.mysqli_error($conn));
?>