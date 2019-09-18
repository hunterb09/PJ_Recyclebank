<html>
<head>
	<title> Recycle Bank </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Recycle Bank</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.html">หน้าแรก</a></li>
				
				<li><a href="about.html">เกี่ยวกับ</a>
				
				<li><a href="contact.html">ติดต่อ</a>
				
				<li><a href="login.html">เข้าสู่ระบบ</a></li>
			</ul>
		</div>
	</nav>

</body>
</html>
<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];
 
	//เชื่อมต่อฐานข้อมูล
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	//$encrypted_mypassword=sha1($pass);
	
	$sql="SELECT count(*) FROM user WHERE username='$user' AND " . 
		"password='$pass'";
	$result=mysqli_query($link,$sql);
	
	$row = mysqli_fetch_row($result);
	if ($row[0] == 1) //มีข้อมูล ตามที่ผู้ใช้ล็อกอินเข้ามา
	{
		echo "ล็อกอินสำเร็จ <p>";
		$sql="SELECT * FROM user WHERE username='$user' AND "." 
			password='$pass'";
		$result = mysqli_query($link,$sql);	
		$row = mysqli_fetch_array($result);
		echo "ยูเซอร์: ".$row['Username']. "<br>";
		echo "พาสต้า: ".$row['Password']. "<br>";
		echo "ยศ: ".$row['Status']. "<br>";
	}
	else //ไม่มีข้อมูล ตามที่ผู้ใช้ล็อกอินเข้ามา
	{
		echo "ล็อกอินไม่สำเร็จ";
	}
?>