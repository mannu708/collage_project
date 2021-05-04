<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>subscription</title>
	<link href="subscribe/css/style.css" rel='stylesheet' type='text/css'/>
	<link href="subscribe/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Flat Subscribe  Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
			<script src="js/jquery.min.js"></script>
			<script>$(document).ready(function(c) {
			$('.alert-close').on('click', function(c){
				$('.main-agile').fadeOut('slow', function(c){
					$('.main-agile').remove();
				});
			});	  
		});
		</script>
</head>
<body>
	<div class="main-agile">
		<div class="alert-close"> </div>
		<div class="content-wthree">
			<h1>Website Subscribe Now</h1>
			<i class="fa fa-envelope" aria-hidden="true"></i>
			
			<form method="post">
				<input type="email"  class="email" name="email" placeholder="Enter Your Email" required="">
				<input type="submit" value="Subscribe" name="sub">
			</form>
		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2017 Flat Subscribe Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
</body>
</html>
<?php
include("admin/tables/db_connect.php");
if(isset($_POST['sub']))
{
	$email= $_POST['email'];
    $x="insert into subscribers(email_id)values('$email')";
	$y=mysqli_query($con,$x);
	
}




?>