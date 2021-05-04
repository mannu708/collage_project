<table border="3px">
<tr>
<th>Srno</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>

</tr>
<?php
//$un=$_GET['val']; 
//$uname="";
//$pass="";
$con=mysqli_connect("localhost","root","","project");
mysqli_select_db($con,"project");
$name=$_POST['t1'];
$query="select * from registration where name like '%$name%'";
$c=mysqli_query($con,$query);
$n=mysqli_num_rows($c);	
if($n>0)
{	
while($data=mysqli_fetch_array($c))
{
/*$sno=$data[0];
$pass=$data[2];
$uname=$data[1];

$email=$data[3];
*/
echo("<h1></h1>");
echo"<tr>";
echo"<td>".$data[0]."</td>";
echo"<td>".$data[1]."</td>";
echo"<td>".$data[2]."</td>";
echo"<td>".$data[3]."</td>";
/*echo"<td>$uname</td>";
echo"<td>$pass</td>";
echo"<td>$email</td>";
*/
echo"</tr>";
exit();
}}
?>
</table>
