<?php
	//หลังจากล็อกอิน ได้ทำการเช็คว่าเป็น admin หรือ officer
	session_start();
	$officer = $_POST['officer'];
	$pass = $_POST['pass'];
 
	//เชื่อมต่อฐานข้อมูล
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	//$encrypted_mypassword=sha1($pass);
	
	$sql="SELECT count(*) FROM officer WHERE username='$officer' AND " . 
		"password='$pass'";
	$result=mysqli_query($link,$sql);
	
	$sql="SELECT * FROM officer WHERE username='$officer' AND "." 
			password='$pass'";
	$result = mysqli_query($link,$sql);	
	$row = mysqli_fetch_array($result);

	if ($row['Status'] == "admin" || $row['Status'] == "officer") //มีข้อมูล ตามที่ผู้ใช้ล็อกอินเข้ามา
	{
		echo "ล็อกอินสำเร็จ <p>";
		$_SESSION["OfficerID"] = $row["OfficerID"];
		$_SESSION["Status"] = $row["Status"];
		session_write_close();
		if($row['Status'] == "admin")
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