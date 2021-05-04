<link href="bootstrap/css/font-awesome.css" rel="stylesheet"> 
<?php

include("tables/db_connect.php");
  
if(isset($_GET['x']))
{
    $sno=$_GET['x'];
 
  
   
$x="select * from srv_approval where sno='$sno'";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
    $srv_id=$c['sno'];
    $srvman=$c['name'];
    $num=$c['contact_no'];
    $catg=$c['service_offer'];
    

$prof=$c['pro_pic'];
$expr=$c['experiance'];
//$_SESSION['sno']=$c['srno'];

$a="insert into services_details(category,name,experiance,image,charges,srv_id)values('$catg','$srvman','$expr','$prof','pending','$srv_id')";
$z=mysqli_query($con,$a);
$st="update srv_approval set status='accepted' where sno='$sno'";
$sql=mysqli_query($con,$st);
if($sql)
{
    $sel="select * from services_details";
    $qu=mysqli_query($con,$sel);
    while($cc=mysqli_fetch_array($qu))
    {
        $id=$cc['srno'];
    }
    header("location:update_srv_acp.php?x=$id");
    //    echo "<a href=update_srv_acp.php?x=$id>Update</a>";
        //echo $id;
   }

else
{
    echo "not inserted".mysqli_error($con);
}
}
}
?>