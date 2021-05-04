<?php
if(isset($_GET['x']))
{
  $sno=$_GET['x'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Query</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Query</h2>
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter your name " name="user" required="">
    </div>
    <div class="form-group">
      <label for="email">Email_id:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required="">
    </div>
        <div class="form-group">
    <label for="cont_no">Contact_No:</label>
      <input type="number" class="form-control" id="num" placeholder="Enter your contact number" name="num" required="">
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea class="form-control" row="5" id="msg" placeholder="Enter your message" name="msg" required=""></textarea>
    </div><br>
     <button type="submit" class="btn btn-primary" name="sub">Update</button>
  </form>
</div>

</body>
</html>
<?php
include("tables/db_connect.php");

if(isset($_POST['sub']))
{
$name=$_POST['user'];
$email=$_POST['email'];
$num=$_POST['num'];
$msg= $_POST['msg'];


$z="update query set name='$name',email_id='$email',mobile_no='$num',massage='$msg' where sno='$sno'";
    $a=mysqli_query($con,$z);
    if($a)
    {
        header("location:view_query.php");
        
    }
else{
     echo "not updated".mysqli_error($con);
}

}

?>