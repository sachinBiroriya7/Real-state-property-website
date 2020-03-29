<?php
error_reporting(0);
session_start();
	if ($_SESSION['ADMINID']=="") {
		header("Location:index.php");
	}

if(isset($_POST['Savedata']))
{
$con=mysqli_connect('localhost','root','','property');
$cname=$_POST['client'];
$add=$_POST['address'];
$mob=$_POST['mobile'];
$mail=$_POST['email'];
$stat=$_POST['status'];
if ($cname!="") {
	$insert="insert into contact(Client_Name,Address,Mobile,E_Mail,Status) values('$cname','$add','$mob','$mail','$stat')";
	mysqli_query($con,$insert);
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Contact Us</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body class="body">
	<div class="main">
		<div class="row1"><br/>ADMIN PANEL</div>
		<div class="menu">
			<div class="link"><a href="home.php">Home</a></div>
			<div class="link"><a href="addprop.php">Add Property</a></div>
			<div class="link"><a href="viewprop.php">View Property</a></div>
			<div class="link"><a href="addagent.php">Add Agent</a></div>
			<div class="link"><a href="viewagent.php">View Agent</a></div>
			<div class="link"><a href="addnews.php">Add News</a></div>
			<div class="link"><a href="viewnews.php">View News</a></div>
			<div class="link"><a href="addcon.php">Add Contact Us</a></div>
			<div class="link"><a href="viewcon.php">View Contact Us</a></div>
			<div class="link"><a href="user.php">User</a></div>
			<div class="link"><a href="enquiry.php">Enquiry</a></div>
			<div class="link"><a href="changepass.php">Change Password</a></div>
			<div class="link"><a href="logout.php">Logout</a></div>
			
		</div>
		<div class="row2"><b>Add Contact Us </b>
			<div class="head">
				<form method="post">
					<table class="table">
						<tr>
							<td>Client Name: <input type="text" name=client placeholder="Enter Client's Name" required=""></td>
						</tr>
						<tr>
							<td>Address: <input type="text" name=address placeholder="Enter Address" required=""></td>
						</tr>
						<tr>
							<td>Mobile No: <input type="text" name=mobile placeholder="Enter Mobile No." required=""></td>
						</tr>
						<tr>
							<td>E-Mail: <input type="text" name=email placeholder="Enter Email" required=""></td>
						</tr>
						<tr>
							<td>Status: <input type="radio" name=status value="1">Enable<input type="radio" name=status value="0" required="">Disable</td>
						</tr>
					</table>
					<input type="submit" name="Savedata" value="Save" class="btn">
				</form>
		</div><br/>
			
		<div class="row3">WWW.REALESTATES.COM</div>
	</div>

</body>
</html>