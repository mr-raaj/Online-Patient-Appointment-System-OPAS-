<?php
 $conn=mysqli_connect("localhost","root","","patient");
session_start();

$u=$_SESSION['user'];
#echo $u;


$query="SELECT * FROM register WHERE email='$u'";
$r=mysqli_query($conn,$query);
$total=mysqli_num_rows($r);
if($row=mysqli_fetch_array($r))
{
	#echo $row['name'];
?>
<html>
<head>
<title>Welcome | Patient</title>
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
		padding:10px;
		
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
				
				<h4 style="color:white; font-weight:bold; font-family:verdana;">WELCOME : <?php echo $row['name'];?>  </h4>
				
			</div>
		</div>
	<div class="row header1">
		<div class="col-sm-2 logo"></div>
		<div class="col-sm-8 sitetitle">Online Patient Appointment System</div>
		<div class="col-sm-2"><br><br><form action="logout.php" method="post"><input type="submit" style="color:white;margin-left:50px; font-family:verdana;" value="Logout" class="btn btn-danger"/></form></div>
	</div>


<hr/>
<br/>
<div class="row">
<div class="col-sm-4">
	<center><img src="images/user.png" height="180px" width="180px" title="<?php echo $row['name']; ?>"/>
<br>
<br>
<h5 style="font-weight:bold; font-family:verdana;"><?php echo $row['name']; ?></h5>
<br>
	<div style="background-color:teal; text-align:center;height:80px;">
		<br/>
				<button class="btn btn-default"  style="background-color:white;color:#5e0209; border:3px solid teal;" type="button" data-toggle="modal" data-target="#myModalBook">
							   Book Appointment <i class="fa fa-plus"></i>
							  </button>
							  
			<div id="myModalBook" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			   
				<h4 class="modal-title text-center">Enter Details</h4>
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
				
				<form action="bkap.php" method="post">
				<table border="1" cellspacing="5px" cellpadding="5px" align="center" style="" >
						<tr>
						<th>Patient ID</th>
						<td><input type="text" class="form-control" value="P2021<?php echo $row['id']; ?>" name="p_id"/></td>
						</tr>
						<tr>
						<th>Patient Name</th>
						<td><input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="p_name"/></td>
						</tr>
						
						<tr>
						<th>Date of Birth</th>
						<td><input type="text" class="form-control" value="<?php echo $row['dob']; ?>" name="p_dob"/></td>
						</tr>
						
						<tr>
						<th>Gender</th>
						<td><input type="text" class="form-control" value="<?php echo $row['gender']; ?>" name="p_gender"/></td>
						</tr>
						<tr>
						<th>Email</th>
						<td><input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="p_email"/></td>
						</tr>
						<tr>
						<th>Mobile</th>
						<td><input type="text" class="form-control" value="<?php echo $row['mobile']; ?>" name="p_mobile"/></td></tr>
						
						<tr>
						<th>Address</th>
						<td><input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="p_address"/></td>
						</tr>
						<tr>
						<th>Doctors</th>
						<td>
						<input type="text" list="doct" placeholder="Select Doctors" class="form-control" name="p_doctors"/>
						<datalist id="doct">
						<option>Dr. R Malhotra</option>
						<option>Dr. Radakirshnan</option>
						<option>Dr. R Markenday</option>
						<option>Dr. A P Verma</option>
						<option>Dr. P B Pandey</option>
						<option>Dr. Rashmi</option>
						</datalist>
						
						</td>
						</tr>
						<tr><th>Date</th>
						<td><input type="date" class="form-control" name="p_date"/></td>
						</tr>
					
						</table>
						<br/>
				<input type="submit" class="btn btn-success" value="Book Appointment"/>
				</form>
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	</div>

</center>
</div>
<div class="col-sm-8">
		<table border="1" cellspacing="5px" cellpadding="5px" align="center" style="" >
						<tr>
						<th>Patient ID</th>
						<td>P2021<?php echo $row['id']; ?></td>
						</tr>
						<tr>
						<th>Patient Name</th>
						<td><?php echo $row['name']; ?></td>
						</tr>
						
						<tr>
						<th>Date of Birth</th>
						<td><?php echo $row['dob']; ?></td>
						</tr>
						
						<tr>
						<th>Gender</th>
						<td><?php echo $row['gender']; ?></td>
						</tr>
						<tr>
						<th>Email</th>
						<td><i class="fa fa-envelope"></i>&nbsp;<?php echo $row['email']; ?></td>
						</tr>
						<tr>
						<th>Mobile</th>
						<td><i class="fa fa-phone"></i>&nbsp;<?php echo $row['mobile']; ?></td></tr>
						
						<tr>
						<th>Address</th>
						<td><?php echo $row['address']; ?></td>
						</tr>
						
						</table>
						</div>

</div>
	<br/>
	<br/>
	
	
		<div class="row">
		<div class="col-sm-12" style="background-color:teal; text-align:center;height:80px;">
		<br/>
				<button class="btn btn-default"  style="background-color:white;color:#5e0209; border:3px solid teal;" type="button" data-toggle="modal" data-target="#myModalComplain">
							   Complain Here  <i class="fa fa-send"></i>
							  </button>
							  
			<div id="myModalComplain" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			   
				<h4 class="modal-title text-center">Enter Your Complain </h4>
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
				<form action="complain.php" method="post" enctype="multipart/form-data" >
				<div class="row">
					<label>Enter Patient Name</label><input type="text" name="cmpl_name" class="form-control" placeholder="Enter Paitent Name" required="true"/>
					<label>Enter patient DOB</label><input type="date" name="cmpl_roll" class="form-control" />
					<label>Email Address</label><input type="email" name="cmpl_email" class="form-control" placeholder="Enter Your Email Address" required="true"/>
					<label>Phone/Mobile</label><input type="number" name="cmpl_mobile" class="form-control" placeholder="Enter Your Mobile No" required="true"/>
					
					<label>Enter Problem</label><textarea class="form-control" name="cmpl_problem" placeholder="Enter Details" style="min-height:120px;"></textarea>
					<br>
					
					
				</div>
				
				<div class="row">
					
					<div class="col-sm-12" style="text-align:center;"><input type="submit" value="Complain" onclick="if(!this.form.checkbox.checked){alert('You must to the terms first.');return false}" class="btn btn-danger" style="font-family:verdana;;height:40px;width:150px;background-color:color:white;font-weight:bold;" /></div>
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
	</div>


	</div>	
	

</body>
</html>

<?php
}

?>