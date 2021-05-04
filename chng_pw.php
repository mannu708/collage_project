<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include("tables/db_connect.php");
if(!isset($_SESSION['sno']))
{
  header("location:login.php");
}
else{

  $id=$_SESSION['sno'];
  



?>
<!DOCTYPE html>
<html>
<head>
<title>Change password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Purple Multiple Forms template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="chng_pw/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- agileits-main -->
	<div class="agileits-main"> 
		
		<div class="w3lmain-info" style="margin-left:12em;">	
			<!-- agileits-main-row-one -->
			
				<div class="profile-w3grid float-rt">
					<!-- login form five -->
					<div class="login-form">  
						<div class="agile-row">
							<h3>Change Password</h3>   
							<div class="login-agileits-top"> 
								<form action="#" method="post"> 
									<div class="input-row">
										<input type="password" name="opass" placeholder="Enter Current Password" required=""/>	
										<input type="password" class="npass" name="npass" placeholder="New Password" required=""/>	
										<input type="password" class="cpass" name="cpass" placeholder="Confirm Password" required=""/>	 
									</div>	
									<div class="agileits-row2"> 
									</div>	
									<input type="submit" name="sub" value="Submit">
								</form>  
							</div> 
						</div>  
					</div>
					<!-- login form five -->	 
				</div>
				<div class="clear"> </div>
			</div>  	
		</div>	
	</div>	
	<!-- //agileits-main -->
	<!-- copyright -->
	<div class="copyright">
		<p>© 2017 Purple Multiple Forms . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts.</a></p>
	</div>
	<!-- //copyright --> 
</body>
</html>
<?php
include("tables/db_connect.php");
if(isset($_POST['sub']))
{
    $opass=$_POST['opass'];
    $npass=$_POST['npass'];
    $cpass=$_POST['cpass'];
    $z="select * from admin where password='$opass'";
    $a=mysqli_query($con,$z);
    $m=mysqli_num_rows($a);
    if($m>0)
    {
        $x="update admin set password='$npass'where sno='$id'";
    $y=mysqli_query($con,$x);
    if($y){
        echo "Password changed";
    }
    else{
        echo "not changed".mysqli_error($con);
    }
    }
else
{
	echo "<script>"."alert('Password not exists')"."</script>";
        return false;
      
}
    
}


}


?>