<!---/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.htmlselect product_id,template_id,template_title,template_name,featured_image,featured_image_server_id,
full_image_server_id,full_image from template_down_details where starter_demo_url='/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.html' lat part:contact.html---><!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include("visitors.php");
?>


<?php 
session_start();
$_SESSION['category'] = $_POST['category'];
$_SESSION['date'] = $_POST['iss'];
include("header.php");    
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
  $x="select * from services_details where srno='$sno'";
  $z=mysqli_query($con,$x);
  while($c=mysqli_fetch_array($z))
{

  $srvcharg=$c['charges'];
 }
 ?>
<section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>
    
    <!-- header -->
        <!-- //header -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<rscript src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    
    <section class="w3l-contacts-12">
        <div class="wrapper">
            <h5 class="heading" >Price Schedule</h5>
            
            <div class="contacts12-main">
                <form method="post">
                    <div class="main-input">
                        <textarea name="price"  class="contact-input1"
                            readonly><?php echo  $srvcharg?></textarea>
                        
                            
                    </div><br>
                    <!--input type="text" name="iss" class="form-control datepicker contact-input1" autocomplete="off" placeholder="Select your booking date"--><br>

                    <?php echo '<a href=booking2.php?x=$sno>' ?><button type="submit" name="sub" class="actionbg">Next</button><?php echo '</a>'?>
                </form>
            </div>
        </div>
    </section>

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
 <?php 

}}} 
?>
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
    <script type="text/javascript">
    $('.datepicker').datepicker({ 

startDate: new Date()

});
</script>


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>


<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 09:51:15 GMT -->
</html>
