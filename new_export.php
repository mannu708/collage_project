<?php  
//export.php  
include("tables/db_connect.php");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM subscribers";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                          
                         <th>Email_id</th>  
                           
     
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                 
          
         <td>'.$row["email_id"].'</td>  
          
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=subscriber.xls');
  echo $output;
 }
}
?>
 