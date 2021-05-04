<?php
session_start();
include("admin/tables/db_connect.php");
if(!isset($_SESSION['sno']))
{
  header("location:login1.php");
}
else{
    if(isset($_SESSION['sno']))
{
    
if(isset($_GET['x']))
{
    $sno=$_GET['x'];
  $id=$_SESSION['sno'];
  $x="select * from services_details where srno='$sno'";
  $z=mysqli_query($con,$x);
  while($c=mysqli_fetch_array($z))
{
  $catg=$c['category'];
  $srvcharg=$c['charges'];
 }
  




?>
<head>
  <!--link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <link href="css/font-awesome.css" rel="stylesheet"-->
  

    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>
    
</head>
 
<div class="container">
  <h2>Service & Schedule</h2>
  <form method="post" enctype="multipart/form-data">
  
    <div class="form-group">
      <label for="service">Service:</label>
      <input type="text" class="form-control" id="question" value="<?php echo  $catg?>" readonly>
    </div>
    <input type="text" name="iss" class="form-control datepicker" autocomplete="off" value="Select your booking date"><br>

    <button type="submit" class="btn btn-primary" name="sub">Book</button>
  </form>
</div>
<?php
//$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub']))
{
	
	
	$date=$_POST['iss'];
	
$x="insert into booking(id,service,bk_date,charges,total_chrgs)values('$id','$catg','$date','$srvcharg','$srvcharg')";
$y=mysqli_query($con,$x);
if($y)
{
	echo"booked";
}
else
{
	echo"not booked".mysqli_error($con);
}
}
}
}
}

?>
<script type="text/javascript">
    $('.datepicker').datepicker({ 

startDate: new Date()

});
</script>