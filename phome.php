<?php

    if($_SESSION['user']=="")
{
	session_destroy();
	header("location:login.php");
}
else
{
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Patient Zone | Online Patient Appointment System</title>
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
    <style>
            .abc
            {
                margin:0px auto;
            }
            .form-control
            {
                width:100px;
                
            }
            .pic
            {
                background-image: url('welcome.jpg');
                background-position: fixed;
            }
            .b1
            {
                min-height: 200px;
                border:1px solid;
                margin-top:10px;
                border-radius: 50%;
                background-color:#c8e5bc;
                opacity:.50;
                text-align: center;
                
               
            }
            .b1:hover
            {
                background-color: green;
                color:white;
                transform:rotateZ(360deg);
                transition:3s;
              
            }
           .b1 a
           {
               text-decoration: none;
               font-size: 25px;
               color:#d43f3a;
               
              
             
               
           }
           .b1 a:hover
           {
               color:white;
           }
            </style>
    </head>
    <body>
        
        <div class="container-fluid">
         
<div class="row">
    <div class="col-sm-4 faq"><h4 style="color:white;background-color: red;min-height:30px; width:180px; padding:1%;border-radius:5px;">+ MEDICAL CARE</h4></div>
    <div class="col-sm-4 faq"><h4 STYLE="COLOR:WHITE; padding: 1%;">A DIGITAL INDIA INITIATIVE</h4></div>
    <div class="col-sm-4 faq"><center>
        <a href="#" style="color:white; padding:2%;">FAQ | </a>
        <a href="#" style="color:white; padding:2%;">Feedback |</a>
        <a href="#" style="color:white; padding:2%;">Contact |</a>
        <a href="#" style="color:white; padding:2%;">Language:HINDI</a>
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
          <li><a href="phome.php"><span class="fa fa-home" style="color:white; font-size: 18px; font-weight: bold;"> &nbspHome</span></a></li>
          <li><a href="#">WHAT'S NEW DAY</a></li>
          <li><a href="searchdoctor.php">Doctor Searching</a></li>
          <li><a href="#">My Doctors</a></li>
          <li><a href="complain.php">Complain</a></li>
          <li><a href="#">My Appointment</a></li>
          
          
          </ul>
          <ul class="nav navbar-nav navbar">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting<span class="caret"></span></a>
          <ul class="dropdown-menu">
           
             
                          <li><a href="#">Profile</a></li>
                          <li><a href="#">Change Password</a></li>
                          <li><a href="logout.php">Logout</a></li>
                    
          </ul>
        </li>
      </ul>
       
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="row">
    <div class="col-sm-2" style="min-height: 50px; background-color: red;color:white; margin-top:-20px; padding: 8px; border-radius:9px 0px 0px 9px;"> <h4 style="font-weight: bold; text-align: center;">HIGHLIGHTS</h4></div>
    <div class="col-sm-10" style="min-height: 50px; background-color:whitesmoke;margin-top:-20px; border-radius:0px 9px 9px 0px;">
        
        <marquee scrollamount="8" style="font-size: 25px; font-weight: bold; padding:10px;color:green;">** Welcome To Online Patient Appointment System **</marquee>
        
    </div>
</div>
         
         <div class="row main" style="min-height: 600px;">
             <div class="col-sm-9 pic" style="min-height:600px;">
                 
                 <div class="col-sm-3 b1"><br><br><br>
                     <a href="#">LIST OF HOSPITALS</a>
                 </div>
                 <div class="col-sm-3 b1"><br><br><br>
                     <a href="#"> SEE YOUR REPORT</a>
                 </div>
                 <div class="col-sm-3 b1"><br><br><br><br>
                     <a href="#">LIST OF DOCTORS</a>
                 </div>
                 <div class="col-sm-3 b1"><br><br><br><br>
                     <a href="#">CERTIFICATES</a>
                 </div>
                 
             </div>
             <div class="col-sm-3" style="min-height: 600px; background-color:whitesmoke;">
                 <div class="row" style="background-color:black; min-height:50px; color:white; font-size:20px; text-align:center;"><span class="fa fa-book"></span>&nbsp NOTIFICATION &nbsp<span class="fa fa-book"></span></div>
                 <marquee direction="up" height="530px" style="background-color:#1b6d85;margin-top:8px;color:white;" onmouseover="stop()" onmouseout="start()">      
                     <ol>
                         <li>WELCOME To Patient Zone</li>
                     </ol>
                     </marquee>
             </div>
             
            </div>
        
          <!---- footer start-->
		 <div class="row" style="text-align:center; font-size:14px;">
         <div class="col-sm-5 footer" style="font-family:verdana; padding:10px;">
		  Copyight &copy Online Patient Appointment System ( Team <span style="font-weight:bold;color:red; text-shadow:2px 0px 10px white;">' Trio '</span> )
		 </div>
		<div class="col-sm-7 footer" style="font-family:verdana;padding:10px;">
		  Designed and Developed by <span style="font-weight:bold;color:red; text-shadow:2px 0px 10px white;font-family:verdana;">' Pawanesh '</span>(18663), <span style="font-weight:bold;color:red; text-shadow:2px 0px 10px white; font-family:verdana;">' Satyam '</span>(18675), <span style="font-weight:bold;color:red; text-shadow:2px 0px 10px white;font-family:verdana;">' Hariom Raj '</span>(18650)
		 </div>		 
		</div>
<!---- Footer End -->
        </div>
        </body>
</html>



<?php

    }
?>