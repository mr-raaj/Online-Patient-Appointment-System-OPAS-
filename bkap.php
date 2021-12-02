<?php 
$p_id=$_POST['p_id'];
$p_name=$_POST['p_name'];
$p_dob=$_POST['p_dob'];
$p_gender=$_POST['p_gender'];
$p_email=$_POST['p_email'];
$p_mobile=$_POST['p_mobile'];
$p_address=$_POST['p_address'];
$p_doctors=$_POST['p_doctors'];
$p_date=$_POST['p_date'];
/*
echo $p_id;
echo $p_name;
echo $p_dob;
echo $p_gender;
echo $p_email;
echo $p_mobile;
echo $p_address;
echo $p_doctors;
echo $p_date;

*/

$conn=mysqli_connect("localhost","root","","patient");
$query="INSERT into bookappointment(id,name,dob,gender,email,mobile,address,doctors,date) value('$p_id','$p_name','$p_dob','$p_gender','$p_email','$p_mobile','$p_address','$p_doctors','$p_date')";

mysqli_query($conn,$query);
if($query)
{
	echo "<script>alert('Appointment Booked!');</script>";
	echo '<script>window.location.href="profile.php";</script>';
	
}
else
{
	echo "<script>alert('Appointment Not Booked!');</script>";
	echo '<script>window.location.href="profile.php";</script>';
}




?>