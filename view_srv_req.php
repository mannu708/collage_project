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
  <h2>Request for become a partner</h2>
  
  <table class="table table-hover">
    <thead>
      <tr>
<th>Sno</th>
<th>Service_man Name</th>
<th>Contact No</th>
<th>service_offer</th>

<th>Experiance</th>
<th>Profile_picture</th>

<th>Status</th>
<th>Accept</th>
<th>Reject</th>

</tr>
</thead>
<?php
include("tables/db_connect.php");
$results_per_page = 3;
$x="select * from srv_approval";
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
$sql = "SELECT * FROM srv_approval ORDER BY sno ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $con->query($sql);
?> 
<?php
 while($c = $rs_result->fetch_assoc()) 
{
  echo "<tr>";
  ?>
  <td><?php echo $c['sno']; ?></td>
    <td><?php echo $c['name']; ?></td>
    <td><?php echo $c['contact_no']; ?></td>
    <td><?php echo $c['service_offer']; ?></td>
    <td><?php echo $c['experiance']; ?></td>
    <td><img src="<?php echo 'pictures/'.$c['pro_pic'];?>" height="100px" width="100px"></td>
    <td><?php echo $c['status']; ?></td>
    <td><?php echo "<a href='accept.php?x=$c[sno]' class='btn btn-danger btn-lg'>"?><span class='glyphicon glyphicon-ok'></span><?php echo "</a>"?></td>
    <td><?php echo "<a href='reject.php?x=$c[sno]' class='btn btn-danger btn-lg'>"?><span class='glyphicon glyphicon-remove'></span><?php echo "</a>"?></td>
    
    
  
    <?php
    
    
    echo "</tr>";
}
?>
<?php 
$sql = "SELECT COUNT(sno) AS total FROM srv_approval";
$result = $con->query($sql);
$c = $result->fetch_assoc();
$total_pages = ceil($c["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
    echo "<ul class='pagination pagination-lg'>";        
    echo "<li>"."<a href='view_srv_req.php?page=".$i."'";
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