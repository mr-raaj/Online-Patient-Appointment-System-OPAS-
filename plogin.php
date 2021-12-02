<?php
?>
<html>
<head>
<title>Login</title>
<link rel="shortcut icon" href="feature.png" />
<style>
body
{
	background-image:url('images/login.jpg');
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
	width:100%;
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
<br>
<div class="container-fluid">
<div class="row main">
<div class="col-sm-2"></div>
<div class="col-sm-8 reg">


<form action="plogincode.php" method="post">
<h3>Login Here (Patient)</h3><center><img src="ors.png" height="50px" width="80px" /></center>
<br>
<table align="center" cellspacing="10" cellpadding="10">

<tr>
<th>Enter Patient Email:</th>
<td><input type="email" placeholder="Enter Patient Email" name="email" required="true"/></td>
</tr>

<tr>
<th>Enter Password:</th>
<td><input type="password" placeholder="Enter Password" name="password" required="true"/></td>
</tr>

</table>
<br>
<center><input type="submit" id="btn" value="Login" style="width:200px; font-size:18px;color:white;background-color:orange;"/></center>
<br>
<center><a href="forget.php" style="background-color:white;padding:5px;border-radius:5px;color:orange;">Forgotten Password*</a></center>
</form>
</div>
<div class="col-sm-2"></div>
</div>

<br>
<br>
<br>
<br>
<br>
	
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
           

</body>
</html>