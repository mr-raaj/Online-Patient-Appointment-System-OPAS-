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

<?php

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>About Us | Online Patient Appointment System</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/hover-min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <style>
        body
        {
            //background-color:#1b6d85;
        }
        #outer
        {
            min-height: 60px;
            width:900px;
            border:2px solid orange ;
            border-radius:10px;
            box-shadow: 5px 5px 25px black;
          
        }
        </style>
    <body>
         <div class="container-fluid">
        
<div class="row">
    <div class="col-sm-4 faq"><h4 style="color:white;background-color: red;min-height:30px; width:180px; padding:1%;border-radius:5px;">+ MEDICAL CARE</h4></div>
    <div class="col-sm-4 faq"><h4 STYLE="COLOR:WHITE; padding: 1%;">A DIGITAL INDIA INITIATIVE</h4></div>
    <div class="col-sm-4 faq"><center>
        <h4 style="color:white; padding:1%; font-size:17px; font-family:verdana; text-:10px;">Welcome TO Admin Panel</h4>
       
        </center>
    </div>
    
</div>
<div class="row header1">
    
    <div class="col-sm-2 logo"></div>
    <div class="col-sm-8 sitetitle">Online Patient Appointment System</div>
    <div class="col-sm-2"><img src="di.png" style="padding:4%;"/></div>
</div>

<div class="row">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
      <ul class="nav navbar-nav navbar">
          <li><a href="index.php"><span class="fa fa-home" style="color:white; font-size: 18px; font-weight: bold;"> &nbsp Home </span></a></li>
         
          
         
          <li><a href="registration.php" target="_blank">Sign Up</a></li>
          
       
          
          
          
          </ul>
       
       
      </ul>
    </div>
  </div>
</nav>
</div>


<div class="container-fluid">
<div class="row main">
<div class="col-sm-2"></div>
<div class="col-sm-8 reg">


<form action="adminlogincode.php" method="post">
<h3>Login Here (Admin)</h3><center><img src="ors.png" height="50px" width="80px" /></center>
<br>
<table align="center" cellspacing="10" cellpadding="10">

<tr>
<th>Enter User Id:</th>
<td><input type="email" placeholder="Enter UserId" name="email" required="true"/></td>
</tr>

<tr>
<th>Enter Password:</th>
<td><input type="password" placeholder="Enter Password" name="password" required="true"/></td>
</tr>

</table>
<br>
<center><input type="submit" id="btn" value="Login" style="width:200px; font-size:18px;color:white;background-color:orange;"/></center>
<br>
<center><a href="#" style="background-color:white;padding:5px;border-radius:5px;color:orange;">Forgotten Password*</a></center>
</form>
</div>
<div class="col-sm-2"></div>
</div>

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