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