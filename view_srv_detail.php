<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <h2>View_Service_Detail</h2>
  
  <table class="table table-hover">
    <thead>
      <tr>
<th>Sno</th>
<th>Service_Category</th>

<th>Service_man Name</th>
<th>Profile_picture</th>
<th>Experiance</th>
<th>Service_Charges</th>
<th>Delete</th>
<th>Update</th>

</tr>
</thead>
<?php
include("tables/db_connect.php");
$results_per_page = 3;
$x="select * from services_details";
$y=mysqli_query($con,$x);
?>
<?php
if (isset($_GET["page"])) 
{
	$page  = $_GET["page"]; 
	}
	else
		{ 
	$page=1;
		};

$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM services_details ORDER BY srno ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $con->query($sql);
?> 
<?php
 while($c = $rs_result->fetch_assoc()) 
{
  echo "<tr>";
  ?>
  <td><?php echo $c['srno']; ?></td>
    <td><?php echo $c['category']; ?></td>
    <td><?php echo $c['name']; ?></td>
    <td><img src="<?php echo 'pictures/'.$c['image'];?>" height="100px" width="100px"></td>
    <td><?php echo $c['experiance']; ?></td>
    <td><?php echo $c['charges']; ?></td>
    <td><?php echo "<a href='delete_srv_detail.php?x=$c[srno]' class='btn btn-danger btn-lg'>"?><span class='glyphicon glyphicon-trash'></span><?php echo "</a>"?></td>
    <td><?php echo "<a href='update_srv_detail.php?x=$c[srno]' class='btn btn-danger btn-lg'>"?><span class='glyphicon glyphicon-refresh'></span><?php echo "</a>"?></td>
    
    
  
    <?php
    
    
    echo "</tr>";
}
?>
<?php 
$sql = "SELECT COUNT(srno) AS total FROM services_details";
$result = $con->query($sql);
$c = $result->fetch_assoc();
$total_pages = ceil($c["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
    echo "<ul class='pagination pagination-lg'>";        
    echo "<li>"."<a href='view_srv_detail.php?page=".$i."'";
            if ($i==$page)  
				echo "class='curPage'";
            echo ">".$i."</a> "."</li>"; 
            echo "</ul>";
};

?>
</table>
</div>

</body>
</html>