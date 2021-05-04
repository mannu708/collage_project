<?php
if(isset($_GET['x']))
{
  $sno=$_GET['x'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Services_Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Services_Category</h2>
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="srv_catg">Service_Category:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter service category " name="catg" required="">
    </div>
    <div class="form-group">
    <label for="srv_img">Service_image:</label>
      <input type="file" class="form-control" id="file"  name="img" required="">
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
    $category= $_POST['catg'];
        
    $name2=$_FILES['img']['name'];
    $type=$_FILES['img']['type'];
    $size=$_FILES['img']['size'];
    $temp=$_FILES['img']['tmp_name'];
    $upload='pictures/'.$name2;
    $m=move_uploaded_file($temp,$upload);
    $x="update services set category='$category',image='$name2' where sno='$sno'";

$y=mysqli_query($con,$x);
if($y) 
{
    header("location:view_srv_catg.php");
    
}
else{
 echo "not updated".mysqli_error($con);
}
}
?>