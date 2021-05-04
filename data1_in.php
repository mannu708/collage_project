<head>
    <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <script type="text/javascript">
        $(document).ready(function() {
 
            $("#txtFromDate").datepicker({
                onSelect: function(selected) {
                    var date = $(this).datepicker('getDate');
 
                    if ($('select').val() == '1') {
                        date.setDate(date.getDate() + 6); // Add 7 days
                    } else {
                        date.setDate(date.getDate() + 13); // Add 7 days
                    }
 
 
 
                    $("#txtToDate").datepicker("option", "minDate", selected);
                    $("#txtToDate").datepicker("option", "maxDate", date);
                    $('#txtToDate').val('');
                }
            });
 
            $("#txtToDate").datepicker();
 
            $('select').change(function() {
                $('#txtToDate , #txtFromDate').val('');
 
            })
 
 
        });
    </script>
</head>
 
<form method="post">
student_name<input type="text" name="stud_name"><br>
father_name <input type="text" name="father_name"><br>
contact_no<input type="number" name="cont_no"><br>
category<input type="text" name="cat"><br>
stream<input type="text" name="st"><br>

Issue Date<input type="textbox" id="txtFromDate" value="Choose Date For Issue"/ name="iss"><br>
 Return Date<input type="textbox" id="txtToDate" name="ret" value="Choose Date To Return"/>
fine<input type="text" name="fine"><br>
<input type="submit" name="sub">
</form>
<?php
$con=mysqli_connect("localhost","root","","demo2");
if(isset($_POST['sub']))
{
	
	$student_name=$_POST['stud_name'];
	$father_name=$_POST['father_name'];
	$contact_no=$_POST['cont_no'];
	$category=$_POST['cat'];
	$stream=$_POST['st'];
	$issue_date=$_POST['iss'];
	$return_date=$_POST['ret'];
	$fine=$_POST['fine'];
$x="insert into data1(student_name,father_name,contact_no,category,stream,issue_date,return_date,fine)values('$student_name','$father_name','$contact_no','$category','$stream','$issue_date','$return_date','$fine')";
$y=mysqli_query($con,$x);
if($y)
{
	echo"inserted";
}
else
{
	echo"not inserted".mysqli_error($con);
}
}
?>
