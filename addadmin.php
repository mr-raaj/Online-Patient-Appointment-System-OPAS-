<?php

$email=$_POST['username'];
$password=$_POST['pass'];
$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="patient");

$sql="insert into admin(email,password) value('$email','$password')";
mysqli_query($conn,$sql);
echo '<script>alert("Detals Added")</script>';
header('location:adminprofile.php');
?>