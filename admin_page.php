
<?php
	session_start();
	//เช็คว่าเป็นเจ้าหน้าที่หรือแอดมินหรือไม่
	/*if($_SESSION['OID'] == "")
	{
		header("location:login.php");
	}*/
	
	if($_SESSION['Ostatus'] != "admin")
	{
		header("location:login.php");
	}
	//สร้างแถบเมนู
	require("navbar_a.html");
		
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);	
	$sql = "SELECT * FROM officer WHERE OID = '".$_SESSION['OID']."' ";
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
			<td>ID:</td>
			<td><?php echo $row['OID'];?></td>
		  </tr>
		  <tr>
			<td>Name:</td>
			<td><?php echo $row['Oname'];?></td>
		  </tr>
		</tbody>
		</table>
	</div>
    <div class="col-sm-2"></div>
 
  </div>
</div>
	<br>
	<a href="edit_profile.php">แก้ไข</a><br>
	<br>
	<a href="logout.php">ออกจากระบบ</a>
</body>
</html>