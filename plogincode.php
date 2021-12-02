<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","","patient");
$query="SELECT * FROM register WHERE email='$email' && password='$password'";
$d=mysqli_query($conn,$query);
$t=mysqli_num_rows($d);

if($t==1)
{
	   $_SESSION['user']=$email;
       header('location:profile.php');
}
else
{
	echo "<script> alert('Enter Correct Email or Password?') </script>";
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
<img src="images/error.gif"/><br>
<button style="height:35px; width:120px;"><a  style="text-decoration:none;font-family:verdana;color:#000; font-weight:bold;" href="plogin.php">Login  Again</a></button>
</center>
</body>
</html>
<?php
} 
?>