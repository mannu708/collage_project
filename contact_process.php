<?php
include("config.php");
if(isset($_POST))
{
$nme= $_POST['user'];
$email= $_POST['email'];
$subj=$_POST['subj'];
$num=$_POST['num'];
$msg= $_POST['msg'];
       
    
    $x="insert into query(name,email_id,subject,mobile_no,message,answer,status)values(?,?,?,?,?,'Pending','Pending')";

    $stmtinsert = $db->prepare($x);
    $result = $stmtinsert->execute([$nme, $email, $subj,$num,$msg,]);
    if($result){
        echo 'Submitted.';
    }else{
        echo 'There were erros while submit the data.';
    }
}
else
{
echo 'No data'.mysqli_error();
}
?>