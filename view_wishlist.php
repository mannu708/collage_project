<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin/bs/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="admin/bs/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>view_wishlist</h2>
  
  <table class="table table-hover">
    <thead>
      <tr>
<th>Sno</th>
<th>Service_Category</th>
<th>Sub_Category</th>
<th>Service_man Name</th>
<th>Experiance</th>
<th>Service_Charges</th>
<th>Profile_picture</th>
<th>Remove</th>


</tr>
</thead>
<?php
session_start();
include("admin/tables/db_connect.php");
if(!isset($_SESSION['sno']))
{
  header("location:login.php");
}
else{
    $id=$_SESSION['sno'];
  
$x="select * from wishlist where id='$id'";
$y= mysqli_query($con,$x);

while($c=mysqli_fetch_array($y))
{
  echo "<tr>";
echo"<td>".$c[1]."</td>";
echo "<td>".$c[2]."</td>";
echo "<td>".$c[3]."</td>";
echo "<td>".$c[4]."</td>";
echo "<td>".$c[5]."</td>";
echo "<td>".$c[6]."</td>";
echo "<td>".$c[7]."</td>";
echo "<td><a href=wishlist_remove.php?x=$c[0]>remove</a></td>";
echo "</tr>";
}
}
?>
</table>
</div>

</body>
</html>
