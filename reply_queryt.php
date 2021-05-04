<?php
include("tables/db_connect.php");
if(isset($_GET['x']))
{
  $sno=$_GET['x'];
  $x="select * from query where sno='$sno'";
  $z=mysqli_query($con,$x);
  while($c=mysqli_fetch_array($z))
{
  $name=$c['name'];
  $email=$c['email_id'];
  $num=$c['mobile_no'];
  $que=$c['message'];
}
  
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Query</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="css/font-awesome.css" rel="stylesheet">
  
</head>
<body>

<div class="container">
  <h2>Query</h2>
  <form method="post" enctype="multipart/form-data">
  
    <div class="form-group">
      <label for="message">Question:</label>
      <input type="text" class="form-control" id="question" value="<?php echo  $que?>" name="que" readonly>
    </div>
    <div class="form-group">
      <label for="message">Answer:</label>
      <textarea class="form-control" row="5" id="msg" name="reply" required=""></textarea>
    </div><br>
     <button type="submit" class="btn btn-primary" name="sub"><i class="fa fa-send"></i></button>
  </form>
</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <?php
  
  if(isset($_POST['sub']))
  {
             $reply=$_POST['reply'];
             $y="update query set answer='$reply',status='Replied' where sno='$sno'";
             $query=mysqli_query($con,$y);
             if($query)
             {
 header("location:view_query.php");
             }
             else{
                 echo "not reply".$mysqli_error();
             }
             
  }
  
  
  
  
  
  
  ?>