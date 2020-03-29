<?php
error_reporting(0);
session_start();
$con=mysqli_connect('localhost','root','','property');
$uname=$_POST['USERNAME'];
$upass=$_POST['PASSWORD'];

if ($uname!="" and $upass!="") {
	$sel="select * from admin where Username='".$uname."' and Password='".$upass."'";
	$exe=mysqli_query($con,$sel);
	$tot=mysqli_num_rows($exe);

	if ($tot==1) {
		$fetch=mysqli_fetch_array($exe);
		$_SESSION["ADMINID"]=$fetch['Admin_Id'];
		
		header("Location:home.php");
	}
	else{
		$error="Invalid Username and Password";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body class="body">
	<div class="main">
		<div class="row1"><br/>ADMIN PANEL</div>
		<div class="row2">
			<form method="POST" action="home.php">
				USERNAME: <input type="text" name="USERNAME" placeholder="Enter Username"><br/><br/>
				PASSWORD: <input type="Password" name="PASSWORD" placeholder="Enter Password"><br/><br/>
				<input type="checkbox" name="checkbox"/> Remember Me<br/><br/>
				<button>LOGIN</button>
			</form>
		</div>
		<div class="row3">WWW.REALESTATES.COM</div>
	</div>

	

	
</body>
</html>