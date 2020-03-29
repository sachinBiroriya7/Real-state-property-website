<?php

session_start();
	if ($_SESSION['ADMINID']=="") {
		header("Location:index.php");
	}

if(isset($_POST['Savedata']))
{
$con=mysqli_connect('localhost','root','','property');
$name=$_POST['property'];
$agent_name=$_POST['agent'];
$size=$_POST['size'];
$type=$_POST['type'];
$price=$_POST['price'];
$location=$_POST['place'];
$status=$_POST['status'];

$image=$_FILES['image'];
$names = $image['name'];
$tmpname=$image['tmp_name'];
$path="../uploads-images/".$names;
move_uploaded_file($tmpname, $path);

$image1=$_FILES['image1'];
$name1 = $image1['name'];
$tmpname1=$image1['tmp_name'];
$path="../uploads-images/".$name1;
move_uploaded_file($tmpname1, $path);

$image2=$_FILES['image2'];
$name2 = $image2['name'];
$tmpname2=$image2['tmp_name'];
$path="../uploads-images/".$name2;
move_uploaded_file($tmpname2, $path);

$image3=$_FILES['image3'];
$name3 = $image3['name'];
$tmpname3=$image3['tmp_name'];
$path="../uploads-images/".$name3;
move_uploaded_file($tmpname3, $path);
if ($agent_name!="") {

	$insert="insert into property(Property_Name,Property_Agent_Name,Property_Size,Property_Type,Property_Price,Property_Location,Property_Status,Property_Img_1,Property_Img_2,Property_Img_3,Property_Img_4) values('$name','$agent_name','$size','$type','$price','$location','$status','$names','$name1','$name2','$name3')";
	
/*
	$insert="insert into property set Property_Name='".$name."', Property_Img_1='".$names."',Property_Img_2='".$name1."',Property_Img_3='".$name2."',Property_Img_4='".$name3."',Property_Agent_Name='".$agent_name."',	Property_Size='".$size."',Property_Type='".$type."',Property_Price='".$price."',Property_Location='".$location."',Property_Status='".$status."'";
*/
	mysqli_query($con,$insert);
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Property</title>
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
		<div class="row2"><b>Add Property </b>
			<div class="head">
				<form method="post" enctype="multipart/form-data">
					<table class="table">
						
						<tr>
							<td>Property Name: <input type="text" name=property placeholder=" Enter Property Name" required=""></td>
						</tr>
						<tr>
							<td>Agent Name:<input type="text"  name=agent placeholder=" Enter Agent Name" required=""></td>
						</tr>
						<tr>
							<td>Size: <input type="number" step="any" name=size placeholder=" Enter Size" required="" ></td>
						</tr>
						<tr>
							<td>Type: <input type="radio" name=type value="1">Sell<input type="radio" name=type value="0" required="">Rent</td>
						</tr>
						<tr>
							<td>Price: <input  type="number" step="any" name=price placeholder=" Enter Price" required=""></td>
						</tr>
						<tr>
							<td>Location: <input type="text" name=place placeholder=" Enter Location" required="" ></td>
						</tr>
						<tr>
							<td>Status: <input type="radio" name=status value="1">Enable<input type="radio" name=status value="0" required="">Disable</td>
						</tr>
						<tr>
							<td>Images:<br> <input type="file" name=image required=""><br/>
									 	<input type="file" name=image1 required=""><br/>
										<input type="file" name=image2 required=""><br/>
										<input type="file" name=image3 required=""><br/>			
							</td>
						</tr>
					</table>
					<input type="submit" name="Savedata" value="Save" class="btn">
				</form>
		</div><br/>
			
		<div class="row3">WWW.REALESTATES.COM</div>
	</div>

</body>
</html>