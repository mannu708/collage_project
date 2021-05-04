<?php
session_start();
include("admin/tables/db_connect.php");
if (!isset($_SESSION['sno']) || ($_SESSION['sno'] == '')) 
{
	header("location:login1.php");
	  exit();
   echo"session not set";
}
	
else
{
	$sno=$_SESSION['sno'];
//echo $sno;
$x="select * from registration where sno='$sno'";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
	$name=$c['name'];
	//$lname=$c['last_name'];
	$profile=$c['profile_pic'];
	$id = $c['sno'];
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>My Profile</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <!--link rel="shortcut icon" href="images/fav.ico" type="image/x-icon"-->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="user_db/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="user_db/css/materialize.css" rel="stylesheet">
    <link href="user_db/css/bootstrap.css" rel="stylesheet" />
    <link href="user_db/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="user_db/css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
    <script src="admin/bootstrap/js/jaquery.min.js"></script>
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
				          </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><h3 style="color:white; margin-right:100px;">WELCOME &nbsp;<?php echo  $name;?></h3>
                                </li>						
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="UserPage.php"><img src="" alt="" />
                            </a>
                        </div>
                        <div class="nav-collapse collapse">
                          

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section>
        <div class="pro-cover">
        </div>
    </section>
 <!--SECTION START-->
    <section>
     
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="User(profile1).php" class="pro-act">My Dashboard</a></li>
                        <li><?php echo '<a href="edit_user_profile.php?x=$c[0]">'?>Profile</a></li>
                        <!--li><a href="page.php">Courses</a></li>
                        <li><a href="db-exams.html">Exams</a></li>
                        <li><a href="#!" data-toggle="modal" data-target="#modal4">Upload Notes</a></li>
                        <li><a href="#">Notifications</a></li-->
						
                    </ul>
                </div>
            </div>
        </div>
		
		
		
		
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">
                        <img src="<?php echo 'admin/pictures/'.$profile ?>" height="250px" width="150px">
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h3><span class="glyphicon glyphicon-user"></span><?php echo $name;  ?></h3>
                            </li>
                        </ul>
                    </div>
 
                </div>
                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4><img src="user_db/images/icon/db1.png" alt="" /> My Profile</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="udb-sec udb-cour">
                            <h4><img src="user_db/images/icon/db2.png" alt="" /> Reading Courses</h4>
                            <div class="sdb-cours">
								  	<?php
												$con=mysqli_connect("localhost","root","","project");
												$x="select * from save_notes where id='$sno'";
												$y=mysqli_query($con,$x);
												while($c=mysqli_fetch_array($y))
												{
												?>
                                <ul>
                                    <li>
                                        <a href="page.php">
                                           <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> 
												<img src="<?php echo'admin/pictures/'.$c[6] ?>" alt="" height="160px" width="160px">
												</div>
                                                <div class="list-mig-lc-con">
                                                    <h5><?php echo $c[2]?></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
								<?php
												}
								?>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
<?php
include("footer.php");
?>
<?php
}
?>