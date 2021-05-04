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
  <link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <h2>View_Queries</h2>
  
  <table class="table table-hover success">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Name</th>
        <th>Email_id</th>
        <th>Subject</th>
        <th>Mobile No</th>
        <th>Message</th>
        <th>Status</th>
        <th>Delete</th>
        <th>Reply</th>
      </tr>
    </thead>
<?php
include("tables/db_connect.php");
$results_per_page = 3;
$x="select * from query ";
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
$sql = "SELECT * FROM query ORDER BY sno ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $con->query($sql);
?> 
<?php
while($c=mysqli_fetch_array($y))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>".$c[0]."</td>";
    echo "<td>".$c[1]."</td>";
    echo "<td>".$c[2]."</td>";
    echo "<td>".$c[3]."</td>";
    echo "<td>".$c[4]."</td>";
    echo "<td>".$c[5]."</td>";
   
    echo "<td>".$c[7]."</td>";
    echo "<td><a href='delete_registr.php?x=$c[0]' class='btn btn-danger btn-lg'><span class='glyphicon glyphicon-trash'></span></a></td>";
    
    echo "<td><a href=reply_queryt.php?x=$c[0] class='btn btn-danger btn-lg'><i class='fa fa-reply'></i></a></td>";
    
    echo "</tr>";
    echo "</tbody>";
}
?>
<?php 
$sql = "SELECT COUNT(sno) AS total FROM query";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
    echo "<ul class='pagination pagination-lg'>";        
    echo "<li>"."<a href='page_ceil_final.php?page=".$i."'";
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