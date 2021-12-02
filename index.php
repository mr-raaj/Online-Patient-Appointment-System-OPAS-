<?php

?>

<html>
    <head>
	<link rel="shortcut icon" href="feature.png" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<a href="MasterPage/Link.php"></a>
        <title>Home | Online Patient Appointment System</title>
		
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
	<div id="loader" class="center"></div>	
	<script>
		document.onreadystatechange = function() {
			if (document.readyState !== "complete") {
				document.querySelector(
				"body").style.visibility = "hidden";
				document.querySelector(
				"#loader").style.visibility = "visible";
			} else {
				document.querySelector(
				"#loader").style.display = "none";
				document.querySelector(
				"body").style.visibility = "visible";
			}
		};
	</script>
	
        <div class="container-fluid">
	
<div class="row">
    <div class="col-sm-4 faq"><h4 style="color:white;background-color: red; min-height:27px; width:180px; padding:1%;border-radius:5px;"> &nbsp + MEDICAL CARE</h4></div>
    <div class="col-sm-4 faq"><h4 STYLE="COLOR:WHITE; padding: 1%;">A DIGITAL INDIA INITIATIVE</h4></div>
    <div class="col-sm-4 faq" style="padding:5px;"><center>
        <a href="#" style="color:white; padding:2%;">FAQ | </a>
        <a href="#" style="color:white; padding:2%;">Feedback |</a>
        <a href="#" style="color:white; padding:2%;">Contact |</a>
        <a href="index.php" style="color:white; padding:2%;"><span class="hindi"></span>Language:HINDI</a>
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
          <li><a href="index.php"><span class="fa fa-home" style="color:white; font-size: 18px; font-weight: bold;"> &nbsp Home</span></a></li>
          <li><a href="about.php"><span class="fa fa-book"></span> &nbsp About Us</a></li>
          <li><a href="plogin.php" target="_blank">Book Appointment</a></li>
          <li><a href="registration.php" target="_blank">Sign Up / Login</a></li>
		  <li><a href="contact.php" target="_blank">Contact Us</a></li>
		  
          
          
          </ul>
          <ul class="nav navbar-nav navbar">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Zone<span class="caret"></span></a>
          <ul class="dropdown-menu">  
						  <li><a href="Admin.php">Login</a></li>  
						  <li><a href="registration.php">Sign Up / Register Yourself</a></li>  
                          
                             
                  
                              
          </ul>
        </li>
      </ul>
       
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="row">
    <div class="col-sm-2" style="min-height: 50px; background-color:gray;color:white; margin-top:-20px; padding: 8px;"> <h4 style="font-weight: bold; color:red; border-radius:10px; text-align: center; background-color:orange;">HIGHLIGHTS</h4></div>
    <div class="col-sm-10" style="min-height: 50px; padding:2px; background-color:gray;margin-top:-20px;">
        
        <marquee onmouseover="stop()" onmouseout="start()" scrollamount="9" style="font-size: 20px; font-weight: bold; padding:10px;color:red;"><img src="feature.png"/> Register Yourself on CoWIN to get Covid-19 Vaccine <a href="https://www.cowin.gov.in/home" target="_blank" style="color:teal;"><span style="color:whitesmoke;">Click Here</span></a></marquee>
        
    </div>
</div>
			
           
<!------------Slider Starts----------------->
	 
	 <div class="row" style="min-height:200px; border:1px solid white;">
	 
	 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/pic1.jpg" alt="...">
      <div class="carousel-caption">
	  <div class="cowin" style="height:35px; width:250px; border:1px solid;margin:0px auto; background-color:orange; border-radius:8px;color:white;font-family:verdana;padding:5px;">
		<a href="https://www.cowin.gov.in/home" target="_blank" style="color:white;">Register Yourself on CoWin</a>
	  </div>
      </div>
    </div>
    <div class="item">
      <img src="images/pic.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
	<div class="item">
      <img src="images/ban3.jpg" alt="...">
      <div class="carousel-caption">
        <span style="color:black"> Now getting an OPD appointment, lab reports and blood availability in any government hospital has become online & easy.</span>
      </div>
    </div>
    <div class="item">
      <img src="images/pic5.jpg" alt="...">
      <div class="carousel-caption">
         
      </div>
    </div>
	 <div class="item">
      <img src="images/pnew.jpg" alt="...">
      <div class="carousel-caption">
         
      </div>
    </div>
	 <div class="item">
      <img src="images/pic7.jpg" alt="...">
      <div class="carousel-caption">
         
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
 <!------------Slider Ends------>
			
                         <!---- main section-->
              
              
            <div class="row" style="min-height: 1050px;">
             <div class="col-sm-12" style="min-height: 350px; background-color: whitesmoke;">
                    <h1 class="h1" style="text-align: center; color:skyblue; font-weight: strong; text-shadow: 2px 2px 5px blue;">FEATURES</h1>
                    <center><span style="color:skyblue">----------------------------------------</span><img src="feature.png"/><span style="color:skyblue">--------------------------------------</span></center>
                   <div class="col-sm-4" style="min-height: 300px;">
                       <h3>Online Patient ORS</h3>
                    <h5 style="text-align: justify">Online Registration System (ORS) is a framework to link various hospitals across the country for Aadhaar based online registration and appointment system, where counter based OPD registration and appointment system through Hospital Management Information System (HMIS) has been digitalized. The application has been hosted on the cloud services of NIC. Portal facilitates online appointments with various departments of different Hospitals using eKYC data of Aadhaar number, if patient's mobile number is registered with UIDAI. And in case mobile number is not registered with UIDAI it uses patient's name. New Patient will get appointment as well as Unique Health Identification (UHID) number. If Aadhaar number is already linked with UHID number, then appointment number will be given and UHID will remain same.</h5>
                   </div>
                    <div class="col-sm-4" style="min-height: 300px;">
                        <h3>Simple appointment process</h3>
                        <h5 class="h5" style="text-align: justify">For your first visit to hospital, registration and appointment with doctor is made simpler. All you have to do is verify yourself using Aadhaar Number, Select Hospital and Department, Select date of Appointment and receive SMS for Appointment.</h5>

                        <h3>Dashboard Reports</h3>
                        <h5 class="h5" style="text-align: justify">Total number of Hospitals for which appointment can be taken through web along with their departments for which online appointment can be taken can be seen in reports. Detail reports showing information about New and Old patients taking appointment through this portal can be seen.</h5>
                    </div>
                    <div class="col-sm-4" style="min-height: 300px;">
                        <h3>Hospital On Boarding</h3>
                        <h5 class="h5" style="text-align: justify">Hospitals can come on board this platform and provide their appointment slots for online booking by patients. The system facilitates Hospitals to easily manage their registration and appointment process and monitor the flow of patients.</h5>
                    </div>
                  
                    
                </div>
                
                    <div class="col-sm-12" style="min-height: 100px;background-color: #0f0f0f">
                    <h1 style="color:white; font-weight:bold; text-align: center;text-shadow: 2px 2px 5px blue;">Every Hospital has moved online, why not you?</h1>
                </div>
                
                <div class="col-sm-4" style="min-height: 200px; background-color: skyblue">
                    
                    <a href="bookappointment.php" target="_blank"><h3 style="min-height: 100px; width:400px; background-color: orange; color:black;padding:50px; border-radius:10px; text-decoration: none;">&nbsp ONLINE APPOINTMENT </h3></a>
                    
                </div>
                <div class="col-sm-4" style="min-height: 200px; background-color: skyblue">
                    <a href="registration.php" target="_blank"><h3 style="min-height: 100px; width:400px; background-color: orange; color:black;padding:50px; border-radius:10px; text-decoration: none;">&nbsp HOSPITALS JOIN HERE</h3></a>
                </div>
                <div class="col-sm-4" style="min-height: 200px; background-color: skyblue">
                    <a href="plogin.php" target="_blank"><h3 style="min-height: 100px; width:400px; background-color: orange; color:black;padding:50px; border-radius:10px; text-decoration: none;"><center>HOSPITAL LOGIN</center></h3></a>
                </div>
                <div class="col-sm-12" style="min-height: 50px; background-color: #0f0f0f;"></div>
                
                
                
                
                
                    <div class="col-sm-12" style="min-height: 300px; background-color: #1b6d85;">
                        <h1 class="h1" style="text-align: center; color:skyblue; font-weight: strong; text-shadow: 2px 2px 5px blue;">HIGHLIGHTS</h1>
                    <center><span style="color:skyblue">----------------------------------------------</span><img src="feature.png"/><span style="color:skyblue">-------------------------------------------</span></center>
                    <br>
                    <div class="col-sm-3" style="background-color:red; min-height: 150px; border-radius: 30px; margin-left: 40px;">
                        
                        <h5 class="h3" style="color:white; text-align: center;text-shadow: 2px 2px 5px black;">Number of Hospital <i class="fa fa-hospital-o"></i>  <div class="3u" style="padding-top:35px;color: #fff;font-size: 14px;"> <span style="cursor:pointer;" onclick="getMoreInfo(10);"><u>more</u></span> 
                         </div>
						 </h5>
                    </div>
                   <div class="col-sm-1"></div>
                    <div class="col-sm-3" style="background-color: yellow; min-height: 150px;border-radius:30px;">
                        <h4 class="h3" style="color:white; text-align: center;text-shadow: 2px 2px 5px black;">Appointment Taken Today  <i class="fa fa-user-md"></i> 
						 
							<div class="3u" style="padding-top:35px;color: #fff;font-size: 14px;"> <span style="cursor:pointer;" onclick="getMoreInfo(10);"><u>more</u></span> 
                         </div>
						 </h4>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3" style="background-color: skyblue; min-height: 150px; border-radius:30px;">
                        <h4 class="h3" style="color:white; text-align: center;text-shadow: 2px 2px 5px black;">Total Appointments <i class="fa fa-users"></i>
						<div class="3u" style="padding-top:35px;color: #fff;font-size: 14px;"> <span style="cursor:pointer;" onclick="getMoreInfo(10);"><u>more</u></span> 
                         </div>
						
						</h4>
                    </div>
                   
                    </div>
             
                </div>
           
		   
            <!---- main Section-->
			
         <!---- footer start-->
		 <div class="row" style="text-align:center; font-size:14px;">
		 
        <section class="footer">
            <h6>&nbsp;</h6>
            <div class="container">

                <p>  � Copyright 2021, NIC. All Rights Reserved�. | Govt. Of India</p>
                <p style="margin-left: 15px;"> <a href="https://ors.gov.in/copp/disclaimer.jsp?ln=0">Disclaimer</a></p><br>
                <img src="images/deitylogo.png" alt="Department Of Electronics and Information Technology" />
                <img src="images/nic_logo.png" alt="National Informatics Center" />
            </div><!--CONTAINER-->

            <div class="clearfix"></div>
<br><br>
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
