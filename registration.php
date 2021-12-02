<?php

?>
<html>
<head>
<title>Registration | Patient</title>
<link rel="shortcut icon" href="feature.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="shortcut icon" href="feature.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<a href="MasterPage/Link.php"></a>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/hover-min.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="feature.png" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
<script>
</script>
<style>
body
{
	background-image:url('images/bg.jpg');
	repeat:none;
}

th
{
	//background-color:grey;
	color:navy;
	font-family:verdana;
	border-right:5px solid red;
}
td
{
	//background-color:teal;
	width:400px;
}
tr
{
	border:none;
}
input
{
	width:400px;
	font-family:verdana;
	height:35px;
	font-size:18px;
}
h3
{
	text-align:center;
	font-family:verdana;
	font-size:30px;
	color:navy;
	background-color:orange;
}
#btn
{
	
}
body
{
	//background-color:whitesmoke;
}
.main
{
	
	
	margin-top:10px;
}
.footer
{
	
	color:white;
	background-color:black;
}
.reg
{
	//border:1px solid;
	background-color:whitesmoke;
	box-shadow:0px 0px 10px 0px black;
}
</style>

</head>
<body>

<?php include('header.php') ?>

<html>
<head>

 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<a href="MasterPage/Link.php"></a>
      
		
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/hover-min.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="feature.png" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
		#loader {
			border: 12px solid #f3f3f3;
			border-radius: 50%;
			border-top: 12px solid #444444;
			width: 70px;
			height: 70px;
			animation: spin 5s linear infinite;
		}
		@keyframes spin {
			100% {
				transform: rotate(360deg);
			}
		}
		.center {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			margin: auto;
		}
	</style>
</head>
<body>


     




</body>
<html>


<?php
?>
<div class="container-fluid">
<div class="row main">
<div class="col-sm-2"></div>
<div class="col-sm-8 reg">

<form action="regcode.php" method="post">
<hr/>
	<h3>Sign Up Here (Patient)</h3>
<center><img src="ors.png" height="40px" width="80px" /></center>
<br>

<table align="center" cellspacing="10" cellpadding="10">
<tr>
<th>Enter Patient Name:</th>
<td><input type="text" placeholder="Enter Patient Name" name="name" required="true"/></td>
</tr>
<tr>
<th>Enter Patient DOB:</th>
<td><input type="date" placeholder="Enter Patient Date of Birth" name="pdob" required="true"/></td>
</tr>

<tr>
<th>Enter Patient Gender:</th>
<td>
<select class="form-control" name="gender">
<option>Select Option</option>
<option>Male</option>
<option>Female</option>
</select>
</td>
</tr>

<tr>
<th>Enter Patient Email:</th>
<td><input type="email" placeholder="Enter Patient Email" name="pemail"/></td>
</tr>
<tr>
<th>Enter Mobile No:</th>
<td><input type="number" placeholder="Enter Mobile No." name="pmobile" required="true"/></td>
</tr>
<tr>
<th>Enter Your Address :</th>
<td><textarea class="form-control" name="address" placeholder="Enter Your Address">
</textarea></td>
</tr>
<tr>
<th>Enter Password:</th>
<td><input type="password" placeholder="Enter Password"  name="password" required="true"/></td>
</tr>

</table>
<br>
<center><input type="submit" id="btn" value="Sign Up" onclick="matchPassword()" style="width:200px; font-size:18px;color:white; background-color:orange;"/></center>
<br>
<center><a href="plogin.php" target="_blank">Login</a> If Already Registered *</center>
</form>
</div>
<div class="col-sm-2"></div>



</div>
<hr/>

	
         <!---- footer start-->
		 <div class="row" style="text-align:center; font-size:14px;">
		 
        <section class="footer">
            <h6>&nbsp;</h6>
            <div class="container">

                <p>  � Copyright 2015, NIC. All Rights Reserved�. | Govt. Of India</p>
                <p style="margin-left: 15px;"> <a href="https://ors.gov.in/copp/disclaimer.jsp?ln=0">Disclaimer</a></p>
                <img src="images/deitylogo.png" alt="Department Of Electronics and Information Technology" />
                <img src="images/nic_logo.png" alt="National Informatics Center" />
            </div><!--CONTAINER-->

            <div class="clearfix"></div>

        </section>
         <div class="col-sm-5 footer" style="font-family:verdana; padding:10px;">
		  Copyight &copy Online Patient Appointment System ( Team <span style="font-weight:bold;color:white; text-shadow:2px 0px 10px white;">' Trio '</span> )
		 </div>
		<div class="col-sm-7 footer" style="font-family:verdana;padding:10px;">
		  Designed and Developed by 
		  <span style="font-weight:bold;color:white; text-shadow:2px 0px 10px white;font-family:verdana;">' Hariom Raj '</span>(18650)
		  <span style="font-weight:bold;color:white; text-shadow:2px 0px 10px white; font-family:verdana;">' Satyam '</span>(18675),
		<span style="font-weight:bold;color:white; text-shadow:2px 0px 10px white; font-family:verdana;">' ROOPAM '</span>(18669) 
		 
		 </div>		 
		</div>
<!---- Footer End -->
           


</div>
</body>
</html>