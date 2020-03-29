<?php
error_reporting(0);
session_start();
	if ($_SESSION['ADMINID']=="") {
		header("Location:index.php");
	}

if(isset($_POST['Savedata']))
{
$con=mysqli_connect('localhost','root','','property');
$tit=$_POST['title'];
$desc=$_POST['description'];
$stat=$_POST['status'];
if ($tit!="") {
	$insert="insert into news(News_Title,Description,Status)values('$tit','$desc','$stat')";
	mysqli_query($con,$insert);
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add News</title>
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
		<div class="row2"><b>Add News </b>
			<div class="head">
				<form method="post">
					<table class="table">
						<tr>
							<td>News Title:</td>
							<td><input type="text" name="title" placeholder="News Title" required=""></td>
						
						</tr>
						<tr>
							<td>News Description:</td>
							<td> <textarea placeholder="News Description" name="description" required=""></textarea></td>
						</tr>
						<tr>
							<td>Status:<input type="radio" name=status value="1">Enable</td>
							<td><input type="radio" name=status value="0">Disable</td>
						</tr>	
					</table>
					<input type="submit" name="Savedata" value="Save" class="btn">
				</form>
		</div><br/>
			
		<div class="row3">WWW.REALESTATES.COM</div>
	</div>

</body>
</html>