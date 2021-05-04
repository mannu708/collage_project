<?php
session_start();
include("admin/tables/db_connect.php");
if(!isset($_SESSION['sno']))
{
    //echo"not set";
  header("location:login1.php");
}
else{
    if(isset($_SESSION['sno']))
{
    
if(isset($_GET['x']))
{
    $sno=$_GET['x'];
  $id=$_SESSION['sno'];
  
   
$x="select * from services_details where srno='$sno'";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
    $catg=$c['category'];
    $subcatg=$c['sub_category'];
$srvman=$c['name'];
$prof=$c['image'];
$expr=$c['experiance'];
$srvcharg=$c['charges'];
$a="insert into cart(id,srv_man_img,srv_man_nme,srv_catg,srv_chrg ,total_chrgs,date)
values('$id','$prof','$srvman','$catg','$srvcharg','$srvcharg','1/1/2021')";
$z=mysqli_query($con,$a);
if($z)
{
    //echo"addedd";
header("location:services.php");
}
else
{
    echo "not inserted".mysqli_error($con);
}
}



}
}
}
?>