<?php
session_start();
include("admin/tables/db_connect.php");
if(!isset($_SESSION['sno']))
{
  header("location:login.php");
}
else{
    if(isset($_SESSION['sno']))
{
    
if(isset($_GET['x']))
{
    $sno=$_GET['x'];
  $id=$_SESSION['sno'];
  $x="delete from cart where sno='$sno'";
$y=mysqli_query($con,$x);

if($y)
{
header("location:cart.php");
}
else
{
    echo "not removed".mysqli_error($con);
}
}
}
}
0?>
   