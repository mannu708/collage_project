<html lang="en">
<head>
  <title>View Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

	<script>
	function searchInfo()
	{
		var name=document.getElementById("t1").value;
		if(name)
			$.ajax({
				url:"ajaxdemo2.php",
				type:"POST",
				data:{t1:name},
				success:function(response)
				{
					$("#name_status").html(response);
					
				}
			});
	}
	
	
	</script>
<h1>Search Employee</h1>  
	  
	<input type="text" name="t1" id="t1" onkeyup="searchInfo()">  
<div id="name_status"></div>
</body>
</html>
