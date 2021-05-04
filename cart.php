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
  <h2>View Cart</h2>
  
  <table class="table table-hover success">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Service Man</th>
        <th>Name</th>
        <th>Service Category</th>
        <th>Service Charges</th>
        <th>Total Pay</th>
        <th>Date</th>
      </tr>
    </thead>
    <?php
    include("admin/tables/db_connect.php");
    $x="select * from cart";
$y=mysqli_query($con,$x);

while($c=mysqli_fetch_array($y))
{
    echo "<tr>";
    
    echo "<td>".$c[1]."</td>";
    echo "<td>"?><img src="<?php echo 'admin/pictures/'.$c[2]  ?>"><?php echo"</a>"?>
    <?php  echo "</td>";
    echo "<td>".$c[3]."</td>";
    echo "<td>".$c[4]."</td>";
    echo "<td>".$c[5]."</td>";
    echo "<td>".$c[6]."</td>";
    

    echo "<td><a href=remove.php?x=$c[0]>Remove</a></td>";
    
    echo "</tr>";
}
?>
</table>
</div>
</body>
</html>



