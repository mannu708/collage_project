<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bs/new/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bs/new/js/bootstrap.min.js"></script>
</head>

    <?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$datatable = "services_details"; // MySQL table name
$results_per_page = 3; // number of results per page
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
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
$sql = "SELECT * FROM ".$datatable." ORDER BY srno ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $conn->query($sql);
?> 
<table border="1" cellpadding="4">
<tr>
    <td bgcolor="#CCCCCC"><strong>ID</strong></td>
    <td bgcolor="#CCCCCC"><strong>Name</strong></td></tr>
<?php 
 while($row = $rs_result->fetch_assoc()) {
?> 
            <tr>
            <td><?php echo $row['srno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            
            </tr>
<?php 
}; 
?> 
</table>
 
 
 
<?php 
$sql = "SELECT COUNT(srno) AS total FROM ".$datatable;
$result = $conn->query($sql);
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
