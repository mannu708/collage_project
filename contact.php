<!---/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.htmlselect product_id,template_id,template_title,template_name,featured_image,featured_image_server_id,
full_image_server_id,full_image from template_down_details where starter_demo_url='/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.html' lat part:contact.html---><!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include("visitors.php");
?>


<?php include("header.php");?>
    <!-- header -->
        <!-- //header -->
    </div>
    <section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section> 
    <section class="w3l-contacts-12">
        <div class="wrapper">
            <h5 class="heading">Write to us</h5>
            <h3 class="heading">Get in touch</h3>
            <div class="contacts12-main">
                <form method="post">
                    <div class="main-input">
                        <input type="text" name="user" placeholder="Your full name" class="contact-input1"
                            required />
                        <input type="email" name="email" placeholder="Your email address" class="contact-input1"
                            required />
                        <input type="number" name="num" placeholder="Your phone number" class="contact-input1"
                            required />
                        <input type="subject" name="subj" placeholder="Your subject" class="contact-input1"
                            required />
                    </div>
                    <textarea class="contact-textarea" name="msg" placeholder="Your message here"
                        required></textarea>
                    <button type="submit" name="sub" class="actionbg btn">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- contacts4 block -->
    <section class="w3l-contacts-4">
        <div id="contacts4-block">
            <div class="contact">
                <iframe
                    src="https://maps.google.com/maps/embed?form=WNAMSH&entity=sid%3Ad98d08e1-818e-a7ba-30a5-4637a11eec3e&collection=point.30.836599_75.418716_Punjab"></iframe>
                <div class="cont-details">
                    <h5>Location</h5>
                    <p>
                    </p>
                    <address>
                        <p><span class="fa fa-map-marker"></span> Make It Easy</p>
                        <p>#32841 punjab, Dhuri, home repairs,</p>
                        <p> INDIA. 241136.</p>
                    </address>
                    <p><span class="fa fa-envelope-open-o"></span> Email: <a href="mailto:mail@company.com">aulakhgaganpreet14@gmail.com</a></p>
                            <p><span class="fa fa-envelope-open-o"></span> Email: <a href="mailto:mail@company.com"> <br>  mmaninder@gmail.com</a></p>
                    <p><span class="fa fa-phone"></span> Tel: <a href="tel:+(21)-255-999-8888">+(91)-98-7752-6790</a>
                    </p>
                    <p><span class="fa fa-phone"></span> Tel: <a href="tel:+(21)-255-999-8888">+(91)-75-2988-3678</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- contacts4 block -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- footer-28 block -->
<?php include("footer.php");?>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
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



<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>


<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 09:51:15 GMT -->
</html>
<?php
include("admin/tables/db_connect.php");
if(isset($_POST['sub']))
{
$nme= $_POST['user'];
$email= $_POST['email'];
$subj=$_POST['subj'];
$num=$_POST['num'];
$msg= $_POST['msg'];
       
    
    $x="insert into query(name,email_id,subject,mobile_no,message,answer,status)values('$nme','$email','$subj','$num','$msg','Pending','Pending')";

$y=mysqli_query($con,$x);
if($y) 
{
    echo '<div class="alert alert-success alert-dismissible">
    <a href="index1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Submitted</strong> 
  </div>';
}
else
{
     echo "not submitted";
}
}
?>