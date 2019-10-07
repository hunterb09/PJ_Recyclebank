<?php
	//หลังจากล็อกอิน ได้ทำการเช็คว่าเป็น admin หรือ officer
	session_start();
	$id = $_POST['id'];
	$password = $_POST['password'];
	
	$salt = 'fjdkslarueiwoqp';
	$hash_login_password = hash_hmac('sha256', $password, $salt);

	//เชื่อมต่อฐานข้อมูล
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	//$encrypted_mypassword=sha1($pass);
	
	
	$sql="SELECT * FROM officer WHERE ID='$id' AND "." 
			Opassword='$hash_login_password'";
	$result = mysqli_query($link,$sql);	
	$row = mysqli_fetch_array($result);

	if ($row['Ostatus'] == "admin" || $row['Ostatus'] == "officer") //มีข้อมูล ตามที่ผู้ใช้ล็อกอินเข้ามา
	{
		echo "ล็อกอินสำเร็จ <p>";
		$_SESSION["OID"] = $row["OID"];
		$_SESSION["Ostatus"] = $row["Ostatus"];
		session_write_close();
		if($row['Ostatus'] == "admin")
		{
			header("location:admin_page.php");
		}
		else
		{
			header("location:officer_page.php");
		}

	}
	else //ไม่มีข้อมูล ตามที่ผู้ใช้ล็อกอินเข้ามา
	{
		echo "ล็อกอินไม่สำเร็จ";
	}
?>