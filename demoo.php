<?php
session_start();
include("admin/tables/db_connect.php");
if(!isset($_SESSION['sno']))
{
 echo"not set";
}
else{
   
    
if(isset($_GET['x']))
{
    $sno=$_GET['x'];
  $id=$_SESSION['sno'];
  echo $id;
}
}
  ?>