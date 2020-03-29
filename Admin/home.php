<?php
error_reporting(0);
	session_start();
	if ($_SESSION['ADMINID']=="") {
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
			
		<div class="row3">WWW.REALESTATES.COM</div>
	</div>

</body>
</html>