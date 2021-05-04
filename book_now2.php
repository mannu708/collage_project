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
session_start();
 
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
  $id=$_SESSION['sno'];
  $x="select * from services_details where srno='$sno'";
  $z=mysqli_query($con,$x);
  while($c=mysqli_fetch_array($z))
{
  $catg=$c['category'];
  $srvcharg=$c['charges'];
 }
 ?>

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

                   

        
        
        <!-- form 28 block -->
        <section class="w3l-forms-28">
            <div class="form-28">
                <div class="wrapper">
                    <div class="form-main-cont-28">
                        <div class="content-28-form text-center">
                            <!--span class="fa fa-pencil"></span>
                            <span class="fa fa-envelope-open-o"></span>
                            <span class="fa fa-paper-plane-o"></span-->
                            <h4 class="title-cont-foem28">Service & Schedule</h4>
                            <form  method="post" class="d-grid forms-28-form">
                                
                                <input type="text" value="<?php echo  $catg?>" readonly><br>
                                <input type="text" name="iss" class="form-control datepicker" autocomplete="off" value="Select your booking date">
                                <button type="submit" class="actionbg" name="sub">Next</button>

                            </form>
                            <!--p class="small-para-28form">We will never share your email with 3rd parties and anyone else</p-->
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
        <script type="text/javascript">
    $('.datepicker').datepicker({ 

startDate: new Date()

});
    </body>


    <!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 09:50:13 GMT -->

</html>
