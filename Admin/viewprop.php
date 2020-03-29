<?php
error_reporting(0);
session_start();
	if ($_SESSION['ADMINID']=="") {
		header("Location:index.php");
	}
$con=mysqli_connect('localhost','root','','property');

$aid=$_GET['nid'];

if ($aid!="") {
	$del="delete from property where Property_Id=$aid";
	mysqli_query($con,$del);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Property</title>
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
			<div>
				<h2 align="center">View Property</h2>
					<table border="1" width="100%" style="text-align: center; margin-bottom: 20px;">
						<tr>
							<td>S.No</td>

							<td>Agent ID</td>

							<td>Agent Name</td>
						
							<td>Property Name</td>

							<td>Size</td>

							<td>Type</td>

							<td>Price</td>

							<td>Location</td>

							<td>Status</td>

							<td>Images</td>
						
							<td>Edit</td>
						
							<td>Delete</td>
						</tr>
						<?php
							$i=1;
							$sel="select * from property";
							$exe=mysqli_query($con,$sel);
							while($fetch=mysqli_fetch_array($exe)) {
								
						?>
						<tr>
							<td><?php echo $i;?></td>

							<td><?php echo $fetch['Property_Id'];?></td>

							<td><?php echo $fetch['Property_Name'];?></td>
						
							<td><?php echo $fetch['Property_Agent_Name'];?></td>

							<td><?php echo $fetch['Property_Size'];?></td>

							<td><?php echo $fetch['Property_Type'];?></td>

							<td><?php echo $fetch['Property_Price'];?></td>

							<td><?php echo $fetch['Property_Location'];?></td>

							<td><?php echo $fetch['Property_Status'];?></td>

							<td><img src="../uploads-images/<?php echo $fetch['Property_Img_1']; ?>" width="50"/>
								<img src="../uploads-images/<?php echo $fetch['Property_Img_2']; ?>" width="50"/>
								<img src="../uploads-images/<?php echo $fetch['Property_Img_3']; ?>" width="50"/>
								<img src="../uploads-images/<?php echo $fetch['Property_Img_4']; ?>" width="50"/></td>
						
							<td>Edit</td>
						
							<td><a href="viewprop.php?nid=<?php echo $fetch['Property_Id'];?>">Delete</a></td>
						</tr>
							<?php
							$i++;
					}
						?>
					</table>
		</div><br/>
		<div class="row3">WWW.REALESTATES.COM</div>
	</div>

</body>
</html>