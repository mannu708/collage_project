<!DOCTYPE html>
<html lang="en">
<head>
  <title>Become A Partner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin/bs/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="admin/bs/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Become A Partner</h2>
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Your Name:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter your name " name="user" required="">
    </div>
    
    <div class="form-group">
    <label for="cont_no">Contact_No:</label>
      <input type="number" class="form-control" id="num" placeholder="Enter your contact number" name="num" required="">
    </div>
    <div class="form-group">
      <label for="pro">Services you offer:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter your services you offer" name="prof" required="">
    </div>
    <div class="form-group">
      <label for="pro">Experience:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter your experience" name="expr" required="">
    </div>
    <div class="form-group">
      <label for="prof_pic">Profile_picture:</label>
      <input type="file" class="form-control" id="file" name="img" required="" accept="image/*">
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
$num=$_POST['num'];
$prof= $_POST['prof'];
$expr= $_POST['expr'];

    $name2=$_FILES['img']['name'];
    $type=$_FILES['img']['type'];
    $size=$_FILES['img']['size'];
    $temp=$_FILES['img']['tmp_name'];
    $upload='admin/pictures/'.$name2;
    $m=move_uploaded_file($temp,$upload);
    $sel="select * from srv_approval where name='$nme'";
    $q=mysqli_query($con,$sel);
    $n=mysqli_num_rows($q);
    if($n>0)
    {
        echo "<script>"."alert('You already send service approval')"."</script>";
        return false;
    }
    else{
    if($type!=".jpg" || $type!=".png") 
    {
      echo "<script>alert('Invalid format. Only jpg format allowed');</script>";
      return false;
    }
    
    $x="insert into srv_approval(name,contact_no,service_offer,experiance,pro_pic,status  )values('$nme','$num','$prof','$expr','$name2','pending')";
    $y=mysqli_query($con,$x);
    
    
    if($y) 
    {
         echo "<script>alert('Request Approved After 24 Hours');</script>";
    }
    else
    {
         echo "not inserted".mysqli_error($con);
    }
  }
}

?>