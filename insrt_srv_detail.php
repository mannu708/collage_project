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
      <input type="text" class="form-control" id="text" placeholder="Enter service category " name="srvcatg" required="">
    </div>
    <div class="form-group">
      <label for="sub_catg">Sub_Category:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter sub category " name="subcatg" required="">
    </div>
    <div class="form-group">
      <label for="srvman">Serviceman_name:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter service-man name  " name="srvman" required="">
    </div>
    <div class="form-group">
    <label for="srv_img">Service_image:</label>
      <input type="file" class="form-control" id="file"  name="img" required="">
    </div>
    <div class="form-group">
      <label for="expr">Experiance:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter service-man experiance " name="expr" required="">
    </div>
    <div class="form-group">
      <label for="srv_catg">Service_Charges:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter service charges " name="chrgs" required="">
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
    $category= $_POST['srvcatg'];
    $subcatg= $_POST['subcatg'];
    $srvman= $_POST['srvman'];
    $expr= $_POST['expr'];



    $chrges= $_POST['chrgs'];
        
    $name2=$_FILES['img']['name'];
    $type=$_FILES['img']['type'];
    $size=$_FILES['img']['size'];
    $temp=$_FILES['img']['tmp_name'];
    $upload='pictures/'.$name2;
    $m=move_uploaded_file($temp,$upload);
    $x="insert into services_details(category,sub_category,name,image,experiance,charges)values('$category','$subcatg','$srvman','$name2','$expr','$chrges')";

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