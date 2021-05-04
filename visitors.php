<?php 
$ip=$_SERVER['REMOTE_ADDR'];
    
include("admin/tables/db_connect.php");
$query="insert into total_visitor(ip) values('$ip')";
mysqli_query($con,$query);
?>