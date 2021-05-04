<body>
    <center><h1>Total visitors</h1></center>
    <?php 
    $ip=$_SERVER['REMOTE_ADDR'];
    
    include("tables/db_connect.php");
    $query="insert into total_visitor(ip) values('$ip')";
    mysqli_query($con,$query);
    $q="select * from total_visitor";
    $f=mysqli_query($con,$q);
    $count=mysqli_num_rows($f);
    echo "total visitors:".$count;
    ?>
</body>
