<?php
if(isset($_GET['x']))
{
  $sno=$_GET['x'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="admin/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registration</h2>
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
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter your password " name="pass" required="">
    </div>
    <div class="form-group">
    <label for="cont_no">Contact_No:</label>
      <input type="number" class="form-control" id="num" placeholder="Enter your contact number" name="num" required="">
    </div>
    <div class="form-group">
      <label for="pro">Profession:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter your profession" name="prof" required="">
    </div>
    <div class="form-group">
      <label for="prof_pic">Profile_picture:</label>
      <input type="file" class="form-control" id="file" name="img" required="">
    </div><br>
     <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  </form>
</div>

</body>
</html>

<?php
include("admin/tables/db_connect.php");
if(isset($_POST['sub']))
{
$nme= $_POST['user'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$num=$_POST['num'];
$prof= $_POST['prof'];
       
    $name2=$_FILES['img']['name'];
    $type=$_FILES['img']['type'];
    $size=$_FILES['img']['size'];
    $temp=$_FILES['img']['tmp_name'];
    $upload='pictures/'.$name2;
    $m=move_uploaded_file($temp,$upload);
    $x="update registration set name='$nme',email_id='$email',password='$pass',contact_no='$num',profession='$prof',profile_pic='$name2' where sno='$sno'";

$y=mysqli_query($con,$x);
if($y) 
{
    header("location:User(profile1).php");

    
}
else{
 echo "not updated".mysqli_error($con);
}

}
?>