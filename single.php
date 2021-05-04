<?php
session_start();
include("admin/tables/db_connect.php");
if(!isset($_SESSION['sno']))
{
  header("location:login.php");
}
else{

  $id=$_SESSION['sno'];
  
if(isset ($_GET['x']))
{
    $image= $_GET['x'];

    $x= "select * from services_details where srno= '$image'";
    $y= mysqli_query($con,$x);
    while($c=mysqli_fetch_array($y))
{
  ?>
<img src="<?php echo 'admin/pictures/'.$c[4]  ?>">
<p><?php echo "$c[1]"?></p>

  <?php 
echo "<a href= add_to_wishlist.php?x=$c[0]>Add to Wishlist</a>"."<br>";
echo "<a href= book_now.php?x=$c[0]>Book Now </a>"."<br>";
echo "<a href= view_wishlist.php>View Wishlist</a>";
}
echo "<br>";
echo "<a href=cart.php>add to cart</a>";
echo "<a href=logout.php>logout</a>";
}
}
?>