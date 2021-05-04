<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin_login</title>
<script src="login/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="login/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>Admin Login</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form method="post">
						<input type="text"   name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
					<input type="password"   name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="rme" ><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="forget_pw.php">Forgot Password?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" name="sub" value="Login">
					</form>	
					
				</div>
				</div>
			  
			</div>
		</div>
</div>
<!--header end here-->
<div class="copyright">
	<p>© 2016 Classy Login Form. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>
<!--footer end here-->
</body>
</html>
<?php
include("tables/db_connect.php");
if(isset($_POST['sub']))
{

    $user=$_POST['user'];
    $pass=$_POST['pass']; 
	
	$x="select * from admin where name='$user' and password='$pass'";
	$y=mysqli_query($con,$x);
	$n=mysqli_num_rows($y);
if($n>0)
{
	while($c=mysqli_fetch_array($y))
	{
	
	
    if(isset($_POST['rme']))
    {

		$_COOKIE['sno']=$c['sno'];
   
    $_COOKIE['user']=$c['name'];
   
    setcookie("user",$user,time()+4*60*60);
echo $_COOKIE['user'];
   
    
	header("location:Dashboard.php");
}
else
{
$_SESSION['sno']=$c['sno'];
$_SESSION['user']=$c['name'];
echo $_SESSION['user'];
header("location:Dashboard.php");
}
}
}
else{
     echo "<script> alert('Wrong username and password');</script>";
}
}
?>