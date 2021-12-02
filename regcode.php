<?php
$pn=$_POST['name'];
$pd=$_POST['pdob'];
$g=$_POST['gender'];
$pe=$_POST['pemail'];
$pmob=$_POST['pmobile'];
$address=$_POST['address'];
$pass=$_POST['password'];

$connection=mysqli_connect("localhost","root","","patient");
$q="insert into register(name,dob,gender,email,mobile,address,password,date) value('$pn','$pd','$g','$pe','$pmob','$address','$pass',curdate())";

mysqli_query($connection,$q);

echo "<script> alert('Registration Successfully Done.... Now You can Login!!')</script>";

?>
<html>

<head>
<style>
body
{
	background:white;
}
</style>
</head>
<body>
<center>
<br>
<img src="images/s1.gif"/><br>
<button style="height:35px; width:120px;"><a  style="text-decoration:none;font-family:verdana;color:#000; font-weight:bold;" href="plogin.php">Login  Here</a></button>
</center>
</body>
</html>