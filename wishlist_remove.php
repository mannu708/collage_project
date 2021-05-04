<?php
include("admin/tables/db_connect.php");
if(isset($_GET['x']))
{
    $sno=$_GET['x'];
$z="delete from wishlist where sno='$sno'";
    $a=mysqli_query($con,$z);
    if($a)
    {
        header("location:view_wishlist.php");
        
    }
else{
     echo "not updated".mysqli_error($con);
}

}

?>