<?php

session_start();
	if ($_SESSION['ADMINID']=="") {
		header("Location:index.php");
	}

if(isset($_POST['Savedata']))
{
$con=mysqli_connect('localhost','root','','property');
$aname=$_POST['name'];
$mail=$_POST['email'];
$mob=$_POST['mobile'];
$add=$_POST['place'];
$stat=$_POST['status'];
$file=$_FILES['image'];
$img=$file['name'];
$tmpname=$file['tmp_name'];
$path="../uploads-images/".$img;
move_uploaded_file($tmpname,$path);
if ($aname!="") {
	$insert="insert into agent(Name,E_mail,Mobile,Address,Status,Photo) values('$aname','$mail','$mob','$add','$stat','$img')";
	mysqli_query($con,$insert);
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Agent</title>
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
		<div class="row2"><b>Add Agent </b>
			<div class="head">
				<form method="post" enctype="multipart/form-data">
					<table class="table">
						<tr>
							<td>Agent Name: <input type="text" name=name placeholder=" Enter Agent Name" required=""></td>
						</tr>
						<tr>
							<td>E-Mail: <input type="text" name=email placeholder=" Enter E-Mail" required=""></td>
						</tr>
						<tr>
							<td>Mobile No: <input type="text" name=mobile placeholder=" Enter Mobile No." required=""></td>
						</tr>
						<tr>
							<td>Address: <input type="text" name=place placeholder=" Enter Address" required=""></td>
						</tr>
						<tr>
							<td>Status: <input type="radio" name=status value="1">Enable<input type="radio" name=status value="0" required="">Disable</td>
						</tr>
						<tr>
							<td>Photo: <input type="file" name=image required=""></td>
						</tr>
					</table>
					<input type="submit" name="Savedata" value="Save" class="btn">
				</form>
		</div><br/>
			
		<div class="row3">WWW.REALESTATES.COM</div>
	</div>

</body>
</html>