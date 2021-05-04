<!---/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.htmlselect product_id,template_id,template_title,template_name,featured_image,featured_image_server_id,
full_image_server_id,full_image from template_down_details where starter_demo_url='/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.html' lat part:index.html--->
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include("visitors.php");
?>

        <?php 
        include("header.php");
        ?>

        <!-- covers -->
        <section class="w3l-covers-9-main">
            <div class="covers-9">
                <div class="csslider infinity" id="slider1">
                    <input type="radio" name="slides" checked="checked" id="slides_1" />
                    <input type="radio" name="slides" id="slides_2" />
                    <input type="radio" name="slides" id="slides_3" />
                    <input type="radio" name="slides" id="slides_4" />
                    <ul class="banner_slide_bg">
                        <li>
                            <div class="wrapper">
                                <div class="cover-top-center-9">
                                    <div class="w3ls_cover_txt-9">
                                        <h6 class="tag-cover-9">We provide quality service</h6>
                                        <h3 class="title-cover-9">Home Maintenance and Services for you</h3>
                                        <!--<a href="about.html" class="actionbg button-cover-9">Read More</a>
                                        <a href="contact.html" class="actionbg-border button-cover-9">Get in touch</a>-->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wrapper">
                                <div class="cover-top-center-9">
                                    <div class="w3ls_cover_txt-9">
                                        <h6 class="tag-cover-9">We provide quality service</h6>
                                        <h3 class="title-cover-9">We are Professional and provide repair Services.</h3>
                                        
                                        <!--<a href="about.html" class="actionbg button-cover-9">Read More</a>
                                        <a href="contact.html" class="actionbg-border button-cover-9">Get in touch</a>-->
                                        </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wrapper">
                                <div class="cover-top-center-9">
                                    <div class="w3ls_cover_txt-9">
                                        <h6 class="tag-cover-9">We provide quality service</h6>
                                        <h3 class="title-cover-9">The Best company to provide home Services</h3>
                                        <!--<a href="about.html" class="actionbg button-cover-9">Read More</a>
                                        <a href="contact.html" class="actionbg-border button-cover-9">Get in touch</a>-->
                                        </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wrapper">
                                <div class="cover-top-center-9">
                                    <div class="w3ls_cover_txt-9">
                                        <h6 class="tag-cover-9">We provide quality service</h6>
                                        <h3 class="title-cover-9">The Most targetted cleaning services. </h3>
                                        <!--<a href="about.html" class="actionbg button-cover-9">Read More</a>
                                        <a href="contact.html" class="actionbg-border button-cover-9">Get in touch</a>-->
                                        </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="arrows">
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                        <label for="slides_4"></label>
                    </div>
                    <div class="navigation">
                        <div>
                            <label for="slides_1"></label>
                            <label for="slides_2"></label>
                            <label for="slides_3"></label>
                            <label for="slides_4"></label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //covers -->

        <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
            <!---728x90--->

        </div>

        <!-- features -->
        <?php
include("admin/tables/db_connect.php");
if(isset($_POST['sub']))
{
	$email= $_POST['email'];
    $x="insert into subscribers(email_id)values('$email')";
	$y=mysqli_query($con,$x);
	if($y)
    {
        echo '<div class="alert alert-success alert-dismissible">
       <a href="index1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Success!</strong> 
     </div>';
    }
    else{

       // $y=0;
    }
}
?>
        <?php
     
?>
        <section class="w3l-feature-9">
            <div class="main-w3">
                <div class="wrapper">
                    <div class="d-flex main-cont-wthree-fea">
                        <div class="grids-feature">
                            <span class="fa fa-bath"></span>
                            <h4><a href="#feature" class="title-head">Best Quality</a></h4>
                        </div>
                        <div class="grids-feature">
                            <span class="fa fa-cogs"></span>
                            <h4><a href="#feature" class="title-head">Expert Advice</a></h4>
                           <!-- <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.</p>-->
                        </div>
                        <div class="grids-feature">
                            <span class="fa fa-users"></span>
                            <h4><a href="#feature" class="title-head">Labour Expertise</a></h4>
                            <!--<p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.</p>-->
                        </div>
                        <div class="grids-feature">
                            <span class="fa fa-clock-o"></span>
                            <h4><a href="#feature" class="title-head">On Time Service</a></h4>
                            <!--<p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //features -->

        <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
            <!---728x90--->

        </div>
        <!-- grids block 4 -->
        <section class="w3l-grids-4">
            <div id="grids4-block">
            
                <div class="wrapper">
                
                    <h5 class="heading">Services</h5>
                    <h3 class="heading">What we offer</h3>
                    
                    <div class="owl-carousel owl-theme text-center">
                    <?php
//session_start();
include("admin/tables/db_connect.php");
/*if(!isset($_SESSION['sno']))
{
    ?>
    <script>window.location="login1.php";</script>
<?php
}
else{

  $id=$_SESSION['sno'];
 */ 
$x="select * from services_details";
$y= mysqli_query($con,$x);

while($c=mysqli_fetch_array($y))
{
?>
                        <div class="item">
                        
                            <div class="grids4-info">
                            
                                <a href="login1.php"><img src="<?php echo'admin/pictures/'.$c[4] ?>" class="img-responsive" alt="" /></a>
                                <div class="info">
                                    <h5><a href="login1.php"><?php echo $c[1]?></a></h5>
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!--<div class="item">
                            <div class="grids4-info">
                                <a href="#URL"><img src="assets/images/cleaning.jpg" class="img-responsive" alt="" /></a>
                                <div class="info">
                                    <h5><a href="#URL">Cleaning</a></h5>
                                    <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="grids4-info">
                                <a href="#URL"> <img src="assets/images/housekeeping.jpg" class="img-responsive" alt="" /></a>
                                <div class="info">
                                    <h5><a href="#URL">House keeping</a></h5>
                                    <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="grids4-info">
                                <a href="#URL"><img src="assets/images/wallpainting.jpg" class="img-responsive" alt="" /></a>
                                <div class="info">
                                    <h5><a href="#URL">Painting</a></h5>
                                    <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="grids4-info">
                                <a href="#URL"> <img src="assets/images/sinkcleaning.jpg" class="img-responsive" alt="" /></a>
                                <div class="info">
                                    <h5><a href="#URL">Refrigerator</a></h5>
                                    <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="grids4-info">
                                <a href="#URL"> <img src="assets/images/electrician.jpg" class="img-responsive" alt="" /></a>
                                <div class="info">
                                    <h5><a href="#URL">Plumber</a></h5>
                                    <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="grids4-info">
                                <a href="#URL"> <img src="assets/images/carpenter.jpg" class="img-responsive" alt="" /></a>
                                <div class="info">
                                    <h5><a href="#URL">Refrigerator</a></h5>
                                    <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam.
                                    </p>
                                
                            </div>
                            
                        </div>-->
                        <?php }?> 
                    </div>
                    
                </div>
                  
            </div>
        </section>
        <!-- grids block 4 -->

        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 0,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 2,
                            nav: false,
                            margin: 20
                        },
                        1000: {
                            items: 3,
                            nav: true,
                            loop: true,
                            margin: 20
                        }
                    }
                })
            })
        </script>
         <!--<section class="w3l-form-16">
            <!-- /form-16-section 
            <div class="form-16-mian">
                <div class="wrapper">
                    <div class="forms-16-top">
                        <div class="forms-16-info">
                            <h5>Book service</h5>
                            <h3>All types of Service Maintenance at your house</h3>
                            <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla. Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus.
                                Nulla eu ipsum tempus est et.</p>
                            <a href="contact.html" class="read1">Schedule a visit</a>
                            <a href="services.html" class="read2">Services we offer</a>
                        </div>
                        <div class="form-right-inf">
                            <div class="form-inner-cont">
                                <h6>Book a service now<span class="line"></span></h6>
                                <form action="#" method="post" class="signin-form">
                                    <div class="d-grid book-form">
                                        <div class="form-input">
                                            <input type="text" name="" placeholder="Your Name" required />
                                        </div>
                                        <div class="form-input">
                                            <input type="email" name="" placeholder="Email Address" required />
                                        </div>
                                        <div class="form-input">
                                            <input type="number" name="" placeholder="Contact Number" required />
                                        </div>
                                        <div class="form-input">
                                            <select>
                                            <option value="Select service">Select service</option>
                                            <option value="Carpentry">Carpentry</option>
                                            <option value="Cleaning">Cleaning</option>
                                            <option value="Electrical wiring">Electrical wiring</option>
                                            <option value="Plumbing">Plumbing</option>
                                        </select>
                                        </div>
                                    </div>
                                    <button class="btn">Book Service</button>
                                    <p>We will never share your details with 3rd parties.</p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- //form-16-section -->

        <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
            <!---728x90--->

        </div>

        <section class="w3l-customers-8">
            <div class="customers-main">
                <div class="wrapper">
                    <h5 class="heading">Customers</h5>
                    <h3 class="heading">What our clients say</h3>
                    <div class="customer">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="assets/images/testi1.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus. Nulla eu ipsum et.</p>
                                <a href="#link" class="customer-link">
                                    <h3 class="card-title">Johnson Smith</h3>
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top img-responsive" src="assets/images/testi2.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus. Nulla eu ipsum et.</p>
                                <a href="#link" class="customer-link">
                                    <h3 class="card-title">Elizabeth Ker</h3>
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top img-responsive" src="assets/images/testi3.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus. Nulla eu ipsum et.</p>
                                <a href="#link" class="customer-link">
                                    <h3 class="card-title">Laura Sten</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <!-- <div class="w3l-grids-block-5">
            <!-- grids block 5 
            <section id="grids5-block">
                <div class="wrapper">
                    <h5 class="heading">Our blog</h5>
                    <h3 class="heading">Latest news</h3>
                    <div class="d-grid">
                        <div class="grids5-info">
                            <a href="#URL"><img src="assets/images/homemaintenance.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#URL">Replacement, Repairs.</a></h4>
                                <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus est suscipit et dolor amet.</p>
                                <ul class="blog-list">
                                    <li>
                                        <p><span class="fa fa-clock-o"></span> Sep 2019</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-heart-o"></span> <strong>20</strong> likes</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-comments-o"></span> <strong>2</strong> comments</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="grids5-info">
                            <a href="#URL"><img src="assets/images/sinkcleaning.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#URL">Sump and tank cleaning</a></h4>
                                <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus est suscipit et dolor amet.</p>
                                <ul class="blog-list">
                                    <li>
                                        <p><span class="fa fa-clock-o"></span> Sep 2019</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-heart-o"></span> <strong>20</strong> likes</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-comments-o"></span> <strong>2</strong> comments</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="grids5-info">
                            <a href="#URL"><img src="assets/images/housekeeping.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#URL">House keeping, cleaning</a></h4>
                                <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus est suscipit et dolor amet.</p>
                                <ul class="blog-list">
                                    <li>
                                        <p><span class="fa fa-clock-o"></span> Sep 2019</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-heart-o"></span> <strong>20</strong> likes</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-comments-o"></span> <strong>2</strong> comments</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>-->
        <!-- // grids block 5 -->



        <!-- form 28 block -->
        <section class="w3l-forms-28">
            <div class="form-28">
                <div class="wrapper">
                    <div class="form-main-cont-28">
                        <div class="content-28-form text-center">
                            <span class="fa fa-pencil"></span>
                            <span class="fa fa-envelope-open-o"></span>
                            <span class="fa fa-paper-plane-o"></span>
                            <h4 class="title-cont-foem28">Subscribe to stay informed on Services, Offers and Discounts.</h4>
                            <form  method="post" class="d-grid forms-28-form">
                                <input type="email" name="email" placeholder="Enter email address">
                                <button type="submit" class="actionbg" name="sub">Subscribe</button>
                            </form>
                            <p class="small-para-28form">We will never share your email with 3rd parties and anyone else</p>
                        </div>
                   
                    </div>
                </div>
            </div>
        </section>

        <!-- //form 28 block -->
        <!-- footer-28 block -->
<?php
include("footer.php");
?>
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->



        <div id="v-w3layouts"></div>
        <script>
            (function(v, d, o, ai) {
                ai = d.createElement('script');
                ai.defer = true;
                ai.async = true;
                ai.src = v.location.protocol + o;
                d.head.appendChild(ai);
            })(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');
        </script>
    </body>


    <!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 09:50:13 GMT -->

</html>
