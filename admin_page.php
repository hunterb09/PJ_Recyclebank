
<?php
	session_start();
	
	if($_SESSION['OfficerID'] == "")
	{
		header("location:login.html");
	}
	
	if($_SESSION['Status'] != "admin")
	{
		header("location:login.html");
	}
	//สร้างแถบเมนู
	require("navbar_a.html");
		
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
	<title>ผู้ดูแลระบบ</title>
</head>
<body align="center">
<div class="container">
  <center><h2>ผู้ดูแลระบบ</h2>          
  <div class="row" >
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
		<table class="table table-bordered">
		<tbody>
		  <tr>
			<td>Username:</td>
			<td><?php echo $row['Username'];?></td>
		  </tr>
		  <tr>
			<td>Name:</td>
			<td><?php echo $row['Name'];?></td>
		  </tr>
		</tbody>
		</table>
	</div>
    <div class="col-sm-2"></div>
 
  </div>
</div>
<!--<div class="container">
  <h2>ผู้ดูแลระบบ</h2>          
  <table class="table table-bordered">
    <tbody>
      <tr>
        <td>Username</td>
        <td><?php echo $row['Username'];?></td>
      </tr>
      <tr>
        <td>Name</td>
        <td><?php echo $row['Name'];?></td>
      </tr>
    </tbody>
  </table>
</div>-->
	<br>
	<a href="edit_profile.php">แก้ไข</a><br>
	<br>
	<a href="logout.php">ออกจากระบบ</a>
</body>
</html>