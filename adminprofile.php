<?php

$conn=mysqli_connect("localhost","root","","patient");

?>
<html>
<head>
<title>Welcome | Admin</title>
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
		#loader {
			border: 12px solid #f3f3f3;
			border-radius: 50%;
			border-top: 12px solid #444444;
			width: 70px;
			height: 70px;
			animation: spin 1s linear infinite;
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
		
		td
	{
		height:50px;
		width:400px;
		background-color:whitesmoke;
		text-align:center;
		font-weight:bold;
	}
	td:hover
	{
		background-color:teal;
		color:white;
		transition:.5s;
	}
	th
	{
		background-color:#554433;
		color:white;
		//padding:10px;
		
	}
	</style>
	<script>
		
	</script>
</head>
<body>
<div class="container-fluid">	
		
		
		<div class="row">
			<div class="col-sm-4 faq"><h4 style="color:white;background-color: red; min-height:27px; width:180px; padding:1%;border-radius:5px;"> &nbsp + MEDICAL CARE</h4></div>
			<div class="col-sm-3 faq"><h4 STYLE="COLOR:WHITE; padding: 1%;">A DIGITAL INDIA INITIATIVE</h4></div>
			<div class="col-sm-5 faq" style="padding:5px;"><center>
				
				<h4 style="color:white; font-weight:bold; font-family:verdana;text-align:center; ">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Welcome : Admin 
				<i class="fa fa-user"></i>  </h4>
				
			</div>
		</div>
	<div class="row header1">
		<div class="col-sm-2 logo"></div>
		<div class="col-sm-8 sitetitle">Online Patient Appointment System</div>
		<div class="col-sm-2"><br><br><form action="adminlogout.php" method="post"><input type="submit" style="color:white;margin-left:50px; font-family:verdana;" value="Logout" class="btn btn-danger"/> &nbsp; <i class="fa fa-logout"></i> </form></div>
	</div>


<hr/>

		<div class="row">
		<div class="col-sm-4" style="background-color:teal; text-align:center;height:80px;">
		<br/>
				<button class="btn btn-default"  style="background-color:white;color:#5e0209; border:3px solid teal;font-weight:bold; " type="button" data-toggle="modal" data-target="#myModalAdd">
							   Add Admin <i class="fa fa-plus"></i>
							  </button>
							  
			<div id="myModalAdd" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			   
				<h4 class="modal-title text-center">Enter Details</h4>
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
				<form action="addadmin.php" method="post" enctype="multipart/form-data" >
				<div class="row">
					<label>Enter Username/Email</label><input type="email" name="username" class="form-control" placeholder="Enter Paitent Name" required="true"/>
					<label>Enter Password</label><input type="password" name="pass" class="form-control" placeholder="Enter Password" />
					
					<br>
					
				</div>
				
				<div class="row">
					
					<div class="col-sm-12" style="text-align:center;"><input type="submit" value="Add" onclick="if(!this.form.checkbox.checked){alert('You must to the terms first.');return false}" class="btn btn-success" style="font-family:verdana;;height:40px;width:150px;background-color:color:white;font-weight:bold;" /></div>
				</div>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	</div>
		<div class="col-sm-4" style="background-color:teal; text-align:center;height:80px;">
		<br/>
		
			
			<button class="btn btn-default"  style="background-color:white;color:#5e0209; border:2px solid teal; font-weight:bold;" type="button" data-toggle="modal" data-target="#myModalBooked">
							   Show Booked Appointment <i class="fa fa-info"></i>
							  </button>
							  
			<div id="myModalBooked" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			   
				<h4 class="modal-title text-center">All Booked Appointment</h4>
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">	
				<table border="1" cellspacing="5" cellpadding="5">
				
					<tr>
					<th>Id</th>
					<th>Name</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Doctors</th>
					<th>Date</th>
					</tr>
				<?php
					$book="SELECT * FROM  bookappointment";
					$r=mysqli_query($conn,$book);
					while($row=mysqli_fetch_array($r))
					{
						#echo $row['name'];
					
				?>
				
				<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?> </td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['doctors'];?></td>
				<td><?php echo $row['date'];?></td>
				</tr>
				<?php
					}
				?>
				</table>
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	
	</div>
			
			
		
		
	
		<div class="col-sm-4" style="background-color:teal; text-align:center;height:80px;">
		<br/>
				<button class="btn btn-default"  style="background-color:white;color:#5e0209; border:3px solid teal; font-weight:bold;" type="button" data-toggle="modal" data-target="#myModalDetails">
							   Show Patient Details <i class="fa fa-info"></i>
							  </button>
							  
			<div id="myModalDetails" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			   
				<h4 class="modal-title text-center">Patient Details</h4>
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">	
				<table border="1" cellspacing="5" cellpadding="5">
				
					<tr>
					<th>Id</th>
					<th>Name</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Password</th>
					</tr>
				<?php
					$q="SELECT * FROM  REGISTER";
					$res=mysqli_query($conn,$q);
					while($row=mysqli_fetch_array($res))
					{
						#echo $row['name'];
					
				?>
				
				<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?> </td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['password'];?></td>
				</tr>
				<?php
					}
				?>
				</table>
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	</div>
	
	</div>
	<br><hr/>
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-4" style="background-color:whitesmoke; color:teal; text-align:center;height:250px; font-family:verdana; border-radius:20px;box-shadow:0px 0px 10px 0px black; font-weight:bold; font:25px;">
	
	<?php
		$q="SELECT id FROM register ORDER By id";
		$res=mysqli_query($conn,$q);
		$total=mysqli_num_rows($res);
	?>
		<br>
		<br>
		<br>
		
		<h4 style="font-family:verdana; font:20px; text-shadow:1px 0px 2px black; font-weight:bold;"> Total Paitent Registered:- <br><br>
		<p style="background-color:;color:black; font-weight:bold; font-family:verdana; font-size:20px; text-shadow:1px 0px 2px red;"><?php echo $total; ?> </p></h4>
	<?php	 
		
	?>
			
		
		<br/>
				<button class="btn btn-default"  style="background-color:white;color:#5e0209; border:3px solid teal; font-weight:bold;" type="button" data-toggle="modal" data-target="#myModalDetails">
							   Show Patient Details <i class="fa fa-info"></i>
							  </button>
							  
			<div id="myModalDetails" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			   
				<h4 class="modal-title text-center">Patient Details</h4>
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">	
				<table border="1" cellspacing="5" cellpadding="5">
				
					<tr>
					<th>Id</th>
					<th>Name</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Password</th>
					</tr>
				<?php
					$q="SELECT * FROM  REGISTER";
					$res=mysqli_query($conn,$q);
					while($row=mysqli_fetch_array($res))
					{
						#echo $row['name'];
					
				?>
				
				<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?> </td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['password'];?></td>
				</tr>
				<?php
					}
				?>
				</table>
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	
	
	
	
	</div>
	
	<div class="col-sm-1"></div>
	<div class="col-sm-1"></div>
	
	
	<div class="col-sm-4" style="background-color:whitesmoke; text-align:center;border-radius:20px;box-shadow:0px 0px 10px 0px black; height:250px;">
	<br>
		<br>
		<br>
		
			<h4 style="font-family:verdana; font:20px; text-shadow:1px 0px 2px black; font-weight:bold; color:teal"> Total Paitent Appointment:- <br><br>
			 <p style="background-color:;color:black; font-weight:bold; font-family:verdana; font-size:20px; text-shadow:1px 0px 2px red;"> 
			
			<?php 
			$ap="SELECT * FROM bookappointment";
			$total_app=mysqli_query($conn,$ap);
			$t=mysqli_num_rows($total_app);
			
			
			
			echo $t;
			
			?>
			
			</p>
			<br>
		</h4>
		
			<button class="btn btn-default"  style="background-color:white;color:#5e0209; border:3px solid teal; font-weight:bold;" type="button" data-toggle="modal" data-target="#myModalBooked">
							   Show Booked Appointment <i class="fa fa-info"></i>
							  </button>
							  
			<div id="myModalBooked" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			   
				<h4 class="modal-title text-center">All Booked Appointment</h4>
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">	
				<table border="1" cellspacing="5" cellpadding="5">
				
					<tr>
					<th>Id</th>
					<th>Name</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Doctors</th>
					<th>Date</th>
					</tr>
				<?php
					$book="SELECT * FROM  bookappointment";
					$r=mysqli_query($conn,$book);
					while($row=mysqli_fetch_array($r))
					{
						#echo $row['name'];
					
				?>
				
				<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?> </td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['doctors'];?></td>
				<td><?php echo $row['date'];?></td>
				</tr>
				<?php
					}
				?>
				</table>
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	
	</div>
	<div class="col-sm-1"></div>


	</div>	
	<hr>
	<div class="row">
	<div class="col-sm-12">
		<img src="images/pic1.jpg" width="100%" />
		</div>
		
	</div>
	<hr>
	
	
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