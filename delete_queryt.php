<?php
include("tables/db_connect.php");
if(isset($_GET['x']))
{
    $sno=$_GET['x'];
$z="delete from query where sno='$sno'";
    $a=mysqli_query($con,$z);
    if($a)
    {
        header("location:view_query.php");
        
    }
else{
     echo "not updated".mysqli_error($con);
}

}

?>