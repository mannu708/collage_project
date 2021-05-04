<?php
/*session_start();
if(!isset($_SESSION['sno']) && $_SESSION['srno'])
{
  header("location:index.php");
}
  else{
 $id= $_SESSION['srno'];*/
 include("tables/db_connect.php");
  
 if(isset($_GET['x']))
 {
     $sno=$_GET['x'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Service_approved</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Accepted Partner</h2>
  <form method="post" enctype="multipart/form-data">
    
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

if(isset($_POST['sub']))
{
    $chargs=$_POST['chrgs'];
    $x="update services_details set charges='$chargs' where srno='$sno'";
    $y=mysqli_query($con,$x);
    if($y)
    {
       header("location:view_srv_req.php");
    }
    else
    {
        echo "not updated".mysqli_error($con);
    }
}  
}

?>