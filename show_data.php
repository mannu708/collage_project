
<?php
session_start();
include("admin/tables/db_connect.php");
if(!isset($_SESSION['sno']))
{
  header("location:login.php");
}
else{

  $id=$_SESSION['sno'];
  
$x="select * from services_details";
$y= mysqli_query($con,$x);

while($c=mysqli_fetch_array($y))
{
echo "<a href=bcm_partnr.php>";  
echo "<a href=single.php?x=$c[0]>"?><img src="<?php echo 'admin/pictures/'.$c[4]  ?>"><?php echo"</a>"?>
<p><?php echo "$c[1]"?></p><br>


  <?php 
}
  
}
?>
