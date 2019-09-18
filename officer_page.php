<?php
	session_start();
	
	if($_SESSION['OfficerID'] == "")
	{
		header("location:login.html");
	}
	
	if($_SESSION['Status'] != "officer")
	{
		header("location:login.html");
	}
	//สร้างแถบเมนู
	require("navbar_u.html");
	
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);	
	$sql = "SELECT * FROM officer WHERE OfficerID = '".$_SESSION['OfficerID']."' ";
	$result = mysqli_query($link,$sql);	
	$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>เจ้าหน้าที่</title>
</head>
<body>
	เจ้าหน้าที่ <br>
	<table border="1" style="width: 300px">
		<tbody>
			<tr>
				<td width="87"> &nbsp;Username</td>
				<td width="197"><?php echo $row['Username'];?>
				</td>
			</tr>
			<tr>
				<td> &nbsp;Name</td>
				<td><?php echo $row['Name'];?></td>
			</tr>
		</tbody>
	</table>
	<br>
	<a href="edit_profile.php">Edit</a><br>
	<br>
	<a href="logout.php">Logout</a>
</body>
</html>