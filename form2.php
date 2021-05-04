<?php

//let's start the session
session_start();

$con=mysqli_connect("localhost","root","","mannu");


$_SESSION['name'] = $_POST['name'];
$_SESSION['email_address'] = $_POST['email_address'];


?>
<form method="post" action="form3.php">
<input type="radio" name="membership_type" value="Free">
<input type="radio" name="membership_type" value="Normal">
<input type="radio" name="membership_type" value="Deluxe">
<input type="checkbox" name="terms_and_conditions">
<input type="submit" value="Go To Step 3">
</form>