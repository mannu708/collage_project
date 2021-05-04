<!DOCTYPE html>
<html lang="en">
<head>
  <title>Query</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Query</h2>
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
    </div>
    <div class="form-group">
      <label for="message">Answer:</label>
      <textarea class="form-control" row="5" id="msg" value="abc" name="msg" required=""></textarea>
    </div><br>
     <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  </form>
</div>

</body>
</html>

<?php
include("tables/db_connect.php");
if(isset($_POST['sub']))
{
$nme= $_POST['user'];
$email= $_POST['email'];

$num=$_POST['num'];
$msg= $_POST['msg'];
       
    
    $x="insert into query(name,email_id,mobile_no,message,answer)values('$nme','$email','$num','$msg','Pending')";

$y=mysqli_query($con,$x);
if($y) 
{
     echo "inserted";
}
else
{
     echo "not inserted";
}
}
?>