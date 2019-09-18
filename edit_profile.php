<?php
	session_start();
	if($_SESSION['OfficerID'] == "")
	{
	echo "Please Login!";
	exit();
	}
	 
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
<title>ThaiCreate.Com Tutorials</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body align="center">
<form name="form1" method="post" action="save_profile.php">
	Edit Profile! <br>
	<table width="400" border="1" style="width: 400px">
		<tbody>
			<tr>
				<td width="125"> &nbsp;OfficerID</td>
				<td width="180">
					<?php echo $row["OfficerID"];?>
				</td>
			</tr>
			<tr>
				<td> &nbsp;Username</td>
				<td>
					<?php echo $row["Username"];?>
				</td>
			</tr>
			<tr>
				<td> &nbsp;Password</td>
				<td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $row["Password"];?>">
				</td>
			</tr>
			<tr>
				<td> &nbsp;Confirm Password</td>
				<td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $row["Password"];?>">
				</td>
			</tr>
			<tr>
				<td>&nbsp;Name</td>
				<td><input name="txtName" type="text" id="txtName" value="<?php echo $row["Name"];?>"></td>
			</tr>
			<tr>
				<td> &nbsp;Status</td>
				<td>
					<?php echo $row["Status"];?>
				</td>
			</tr>
		</tbody>
	</table>
	<br>
	<input type="submit" name="Submit" value="Save">
</form>
</body>
</html>