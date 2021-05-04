<?php

session_start();

$con=mysqli_connect("localhost","root","","mannu");

$_SESSION['membership_type'] = $_POST['membership_type'];
$_SESSION['terms_and_conditions'] = $_POST['terms_and_conditions'];

?>


<form method="post" action="form_process.php">
Card<input type="text" name="name_on_card">
Card No<input type="text" name="credit_card_number">
Card expiry<input type="text" name="credit_card_expiration_date">
<input type="submit" value="Finish">
</form>
