<?php
include("visitors.php");
?>

<?php
session_start();
include("admin/tables/db_connect.php");
$per_page_record = 3;
if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;
$query = "SELECT * FROM services_details LIMIT $start_from, $per_page_record";    
$rs_result = mysqli_query ($con, $query);
if(!isset($_SESSION['sno']))
{
    ?>
    <script>window.location="login1.php";</script>
<?php
}
else{

  $id=$_SESSION['sno'];
  
?>
<head>

<link rel="stylesheet"  
	    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   <style>   
	    table {  
	        border-collapse: collapse;  
	    } 
		.inline{   
	            display: inline-block;   
	            float: right;   
	            margin: 20px 0px;   
	        }   
	         
	        input, button{   
	            height: 34px;   
	        }   
  
	    .pagination {   
	        display: inline-block;   
	    }   
	    .pagination a {   
	        font-weight:bold;   
	        font-size:18px;   
	        color: black;   
	        float: left;   
	        padding: 8px 16px;   
	        text-decoration: none;   
	        border:1px solid black;   
	    }   
	    .pagination a.active {   
	            background-color: pink;   
	    }   
	    .pagination a:hover:not(.active) {   
	        background-color: skyblue;   
	    }   
	        </style> </head>
<?php include("header.php");?>
<section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>
    <!-- header -->
        <!-- //header -->
   
    <!-- Products4 block -->
    <section class="w3l-products-4">
        <div id="products4-block" class="text-center">
        <h5 class="heading">What we serve</h5>
                <h3 class="heading">Our services</h3>
            <div class="wrapper">
                <input id="tab1" type="radio" name="tabs" checked>

               <!-- <input id="tab2" type="radio" name="tabs">
                <label class="tabtle" for="tab2">Electrical repair</label>

                <input id="tab3" type="radio" name="tabs">
                <label class="tabtle" for="tab3">Painting</label>

                <input id="tab4" type="radio" name="tabs">
                <label class="tabtle" for="tab1">Maintenance</label>
                <label class="tabtle" for="tab4">Home service</label>-->

                <section id="content1" class="tab-content">
                    <div class="d-grid grid-col-4">
                    <?php
                        
        
	            while ($c = mysqli_fetch_array($rs_result)) {    
	                  // Display each field of the records.    
	            
    $_SESSION['srno']=$c['srno'];
?>
                        <div class="product">
                            <?php
                           echo" <a href=login1.php>";
?>
                            <img src="<?php echo'admin/pictures/'.$c['image'] ?>"
                                    class="img-responsive" alt=""/>
                                    <?php
                                    echo"</a>";
                                            ?>
                                    <div class="product-details text-center">

                                    <?php
                           echo" <a href=login1.php class='text'>";
                            echo $c['category']."</a>"?>
                            </div>
                        </div>
                        <?php }?>
                        
                    </div>
                    
                </section>

                
            </div>
        </div>
    </section>
    <!-- Products4 block -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    
    <div class="pagination" >    
	      <?php  
	        $query = "SELECT COUNT(*) FROM services_details";     
	        $rs_result = mysqli_query($con, $query);     
	        $row = mysqli_fetch_row($rs_result);     
	        $total_records = $row[0];     
	          
	    echo "</br>";     
	        // Number of pages required.   
	        $total_pages = ceil($total_records / $per_page_record);     
	        $pagLink = "";       
	      
	        if($page>=2){   
	            echo "<a href='services1.php?page=".($page-1)."'>  Prev </a>";   
	        }       
	                   
	        for ($i=1; $i<=$total_pages; $i++) {   
	          if ($i == $page) {   
	              $pagLink .= "<a class = 'active' href='services1.php?page="  
	                                                .$i."'>".$i." </a>";   
          }               
	          else  {   
	              $pagLink .= "<a href='services1.php?page=".$i."'>   
	                                                ".$i." </a>";     
	          }   
        };     
	        echo $pagLink;   
	  
	        if($page<$total_pages){   
	            echo "<a href='services1.php?page=".($page+1)."'>  Next </a>";   
	        }   
	  
	      ?>    
      </div>  
	  
	  
	      <div class="inline">   
	      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
	      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
	      <button onClick="go2Page();">Go</button>   
	     </div>    
	    </div>   
	  </div>  
	</center>  <br> 
    <script>  
	    function go2Page()   
	    {   
	        var page = document.getElementById("page").value;page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
	        window.location.href = 'services1.php?page='+page;   
	    }   
	  </script>

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


<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 09:51:03 GMT -->
</html>
<?php
}
?>