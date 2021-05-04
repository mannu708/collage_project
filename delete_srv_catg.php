<?php
include("tables/db_connect.php");
if(isset($_GET['x']))
{
    $sno=$_GET['x'];
$z="delete from services where sno='$sno'";
    $a=mysqli_query($con,$z);
    if($a)
    {
        header("location:view_srv_catg.php");
        
    }
else{
     echo "not updated".mysqli_error($con);
}

}

?>