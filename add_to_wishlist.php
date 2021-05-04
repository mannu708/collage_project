<?php

session_start();
include("admin/tables/db_connect.php");
if(!isset($_SESSION['sno']))
{
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
$a="insert into wishlist(id,service_category,sub_category,srv_man_name,experiance,visiting_charges,profile)values('$id','$catg','$subcatg','$srvman','$expr','$srvcharg','$prof')";
$z=mysqli_query($con,$a);
if($z)
{
  echo "added";
//header("location:show_data.php");
}
else
{
    echo "not added".mysqli_error($con);
}
}



}
}
}


?>