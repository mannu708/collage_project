<!---/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.htmlselect product_id,template_id,template_title,template_name,featured_image,featured_image_server_id,
full_image_server_id,full_image from template_down_details where starter_demo_url='/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.html' lat part:signup.html---><!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php 
session_start();
include("admin/tables/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 09:51:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home Service a Home Maintenance category Responsive Web Template | Signup : W3layouts</title>
  <!--script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script-->
<link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="admin/bootstrap/js/bootstrap.min.js"></script>
  <?php 
  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
  {
    ?>
    <script>
    swal({
  title: "<?php  echo $_SESSION['status'];?>",
  //text: "You clicked the button!",
  icon: "<?php  echo $_SESSION['status_code'];?>",
  button: "OK,Done!",
       });
    </script>
    <?php
    unset($_SESSION['status']);
  } 
  
  ?> 

  <link rel="stylesheet" href="assets/css/style-freedom.css">
</head>

<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
<div id="codefund"><!-- fallback content --></div>
<script src="../../../../../../../codefund.io/properties/441/funder.js" async="async"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='../../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body>
	<!-- Demo bar start -->
  <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}

/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>


<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

    
    </div>
        <!---<div class="responsive-icons">
            <a href="#url" class="desktop-mode">
                <span class="w3l-icon -desktop">
                    <span class="fa fa-desktop"></span>
                </span>
            </a>
            <a href="#url" class="tablet-mode">
                <span class="w3l-icon -tablet">
                    <span class="fa fa-tablet"></span>
                </span>
            </a>
            <a href="#url" class="mobile-mode no-margin-bottom">
                <span class="w3l-icon -mobile">
                    <span class="fa fa-mobile"></span>
                </span>
            </a>
        </div>-->
    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>



	<!-- forms-17 -->
	<section class="w3l-forms-17">
		<div id="forms-17_sur">

			<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
				<!---728x90--->

			</div>
			<div class="wrapper">
				<div class="forms-17-top">
					<div class="forms-17-text">
						<div class="top">
							<span class="fa fa-user"></span>
							<h4>Register here</h4>
							<p>Register your account</p>
						</div>
						
					</div>
					<div class="forms-17-form">
						<div class="form-17-tp">
							<h6>Register</h6>
							<form method="post" enctype="multipart/form-data">
								<div class="form-input">
									<input type="text" name="user" placeholder="Your full name" required />
								</div>
								<div class="form-input">
									<input type="email" name="email" placeholder="Email address" required />
								</div>
								<div class="form-input">
									<input type="number" name="num" placeholder="Phone number" required />
								</div>
								<div class="form-input">
									<input type="password" name="pass" placeholder="Create password" required />
								</div>
                <div class="form-input">
									<input type="password" name="cpass" placeholder="Confirm password" required />
								</div>
                <div class="form-input">
                <input type="file" class="form-control" name="img" id="customFile" />
								</div>
                
								<div class="align-left-right margin-create">
									<button type="submit" name= "sub" class="btn">Create</button>
								</div>
								<div class="bottom-login">
									<p>Already customer? <a href="login1.php">Login</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="btn btn-home text-center">
					<a href="index1.php" class="">Back to home <span class="fa fa-long-arrow-right"></a>
				</div>
			</div>
		</div>
	</section>
	<!-- forms-17 -->
  <?php

if(isset($_POST['sub']))
{
$nme= $_POST['user'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$num=$_POST['num'];
$name2=$_FILES['img']['name'];
    $type=$_FILES['img']['type'];
    $size=$_FILES['img']['size'];
    $temp=$_FILES['img']['tmp_name'];
    $upload='upload/'.$name2;
    $m=move_uploaded_file($temp,$upload);
$x="insert into registration(name,email_id,password,contact_no,profile_pic)values('$nme','$email','$pass','$num','$name2')";

$y=mysqli_query($con,$x);
if($y) 
{
     //echo "inserted";
     //$_SESSION['status']="Registerd Successfully";
    //$_SESSION['status_code']="success";
    echo "<script>window.location='login1.php'</script>"; 
    }
else
{
     echo "not inserted";
     //$_SESSION['status']=" Not Registerd";
     //$_SESSION['status_code']="error";
    //header("location:signup.php");
    }
}
?>