<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>change password</title>
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
		<h1></h1> 
		<div class="w3lmain-info" style="margin-left:35em;">	
			<!-- agileits-main-row-one -->
			 
			<!-- agileitsmain-row-three -->
			<div class="agileitsmain-row">
				<div class="profile-w3grid profile-w3grid2 float-lt">
					<!-- login form four -->
					<div class="login-form login-form-two">  
						<div class="agile-row">
							<h3>Forgot Password ?</h3>  
							<p class="w3l-subtext">Please enter your email address registered on your account.</p>
							<div class="login-agileits-top"> 
								<form method="post"> 
									<div class="input-row input-row3">
										<input type="email" class="email" name="email" placeholder="Enter Your Email" required=""/>	
									</div>	
									<div class="agileits-row2"> 
									</div>	
									<input type="submit" name="sub" value="Submit">
								</form>  
							</div> 
						</div>  
					</div>
					<!-- login form four -->	  
				</div>
                <div class="clear"> </div>
			</div>  	
		</div>	
	</div>	
				
	
</body>
</html>
<?php
include("tables/db_connect.php");
if(isset($_POST['sub']))
{



$email=$_POST['email'];

    $z="select password from admin where email_id='$email'";
    $a=mysqli_query($con,$z);
    $m=mysqli_num_rows($a);
    if($m>0)
    {
        
    while($n=mysqli_fetch_array($a))
    {
        echo $n['password'];
    }
    }
    else{
        echo "email not exists".mysqli_error($con);
    }
}