<!---/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.htmlselect product_id,template_id,template_title,template_name,featured_image,featured_image_server_id,
full_image_server_id,full_image from template_down_details where starter_demo_url='/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.html' lat part:ecommerce-single.html---><!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include("visitors.php");
?>

<?php 
session_start();
if(isset($_GET['x']))
{
    $sno=$_GET['x'];

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/ecommerce-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 09:51:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Service a Home Maintenance category Responsive Web Template | Ecommerce single : W3layouts</title>
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
<?php include("header.php");?>

    <!-- header -->
        <!-- //header -->
    </div>
    <section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>

    <!-- features-photo-7 -->
    <?php
   
include("admin/tables/db_connect.php");

?>
    <section class="w3l-features-photo-7">
        <div class="features-photo-7_sur">
            <div class="wrapper">
            <?php
                        
                  $x= "select * from services_details where srno= '$sno'";
                  $y= mysqli_query($con,$x);
                  while($c=mysqli_fetch_array($y))
                  {
            ?>
                <div class="features-photo-7_top">
                    <div class="features-photo-7_top-left">
                        <h4><?php  echo "$c[1]"?></h4>
                        <a href="#list" class="rating">
                            <p><span class="fa fa-star"></p>
                            <p><span class="fa fa-star"></p>
                            <p><span class="fa fa-star"></p>
                            <p><span class="fa fa-star"></p>
                            <p><span class="fa fa-star-o"></p>
                            <p>(4 out of 5)</p>
                            <p>- 520 customers reviews</p>
                        </a>
                        <!--h5>Price: <span>$210</span> <span class="line-through">$420</span></h5-->
                        <!--p>Unlock the mop to spin in bucket wringer and lock while mopping. Check out video and images
                            for more details on assembly and usage of the mop.</p>
                        <p>Dimensions (L x W x H): 46 cm x 26 cm x 23 cm</p>
                        <p>Package contents: 1 complete mop set with 1 extra refill </p>
                        <p>A longer and sturdy puller handle helps to carry the bucket with ease from one place to
                            another </p-->
                        <p><h3>Customers use this service for</h3></p>
                       <?php echo "<span style='word-spacing: 3px;'>"?><?php echo $c[8]?><?php echo "</span>"?>
                        <!--div class="feat_top">
                            <div class="features-photo-7-box">
                                <span class="fa fa-money"></span>
                                <a href="#url">Pay on delivery</a>
                            </div>
                            <div class="features-photo-7-box">
                                <span class="fa fa-file"></span>
                                <a href="#url">3 months warranty</a>
                            </div>
                            <div class="features-photo-7-box">
                                <span class="fa fa-file"></span>
                                <a href="#url">15 days returnable</a>
                            </div>
                        </div-->
                        <div class="buttons">
                        <?php
                        echo "<a href=add_to_cart.php?x=$c[0] class='add'>add to cart</a>";
                        echo "<a href=add_to_wishlist.php?x=$c[0] class='add'>Save later</a>";
                        
                        echo "<a href=booking.php?x=$c[0] class='buy'>Book</a>";?>
                            

                        </div>
                        <br>
                        
                        <?php echo $c[6];?>
                        
                   </div>
                    <div class="features-photo-7_top-right">
                        <div class="galleryContainer">
                            <div class="gallery">
                                <input type="radio" name="controls" id="c1" checked><img class="galleryImage" id="i1"
                                    src="<?php echo 'admin/pictures/'.$c[4]  ?>" class="img-responsive" alt="">
                                   
                            </div>
                            <!--div class="thumbnails">
                                <label class="thumbnailImage" for="c1"><img src="assets/images/ec1.jpg"
                                        class="img-responsive" alt=""></label>
                                <label class="thumbnailImage" for="c2"><img src="assets/images/ec3.jpg"
                                        class="img-responsive" alt=""></label>
                                <label class="thumbnailImage" for="c3"><img src="assets/images/ec4.jpg"
                                        class="img-responsive" alt=""></label>
                                <label class="thumbnailImage" for="c4"><img src="assets/images/ec5.jpg"
                                        class="img-responsive" alt=""></label>
                                <label class="thumbnailImage" for="c5"><img src="assets/images/ec6.jpg"
                                        class="img-responsive" alt=""></label>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
<div class="elfsight-app-654c9fd5-672e-4f3f-b561-ed659fe37140"></div>
    </section>
    <!-- //features-photo-7 -->

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
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    <!-- /move top -->



<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>


<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/ecommerce-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 09:51:15 GMT -->
</html>
<?php
}
?>