
<?php
$u=$_POST['email'];
$p=$_POST['password'];


$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="patient");

$sql="select * from admin where email='$u' and password='$p'";
$result=mysqli_query($conn,$sql);

if($row=mysqli_fetch_array($result))

{
	$_SESSION['user']=$u;
	header('location:adminprofile.php');
}
else
{
	echo "<script>alert('Enter Correct Email or Password..')</script>";
	echo "<script>window.location.href='Admin.php'</script>";
}


?>