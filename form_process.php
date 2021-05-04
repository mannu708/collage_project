<?php

	session_start();

	$con=mysqli_connect("localhost","root","","mannu");
$uname=$_SESSION['name'];
$emaill=$_SESSION['email_address'];
$mem=$_SESSION['membership_type'];
$terms=$_SESSION['terms_and_conditions'];
$card=$_POST["name_on_card"];
$cred=$_POST["credit_card_number"];
$exp=$_POST["credit_card_expiration_date"];

$insert_query="insert into subscriptions(name,email_address,membership_type,terms_and_conditions,name_on_card,credit_card_number,credit_card_expiration_date)values('$uname','$emaill','$mem','$terms','$card','$cred','$exp')";

//let's run the query
$y=mysqli_query($con,$insert_query);
if($y)
{
	echo"inserted";
}
else
{
	echo"not inserted".mysqli_error($con);
}
?>