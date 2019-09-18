<?php
	$username = $_POST['Username'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$st = $_REQUEST['status'];
	if($st == "admin" || $st == "officer")
	{
		//เชื่อมต่อฐานข้อมูล 
		$link = mysqli_connect("localhost", "root");
		mysqli_set_charset($link,'utf8');
		$sql = "use recyclebank";
		$result = mysqli_query($link,$sql);
		
		$sql = "insert into officer (Username, Password, Name, Status)".
		"values('$username', '$pass', '$name', '$st')";
		$result = mysqli_query($link,$sql);	
		
		//สร้างแถบเมนู
		require("officer_show.php");
	}
	else //ไม่มีข้อมูล ตามที่ผู้ใช้ล็อกอินเข้ามา
	{
		echo "กรอกข้อมูลไม่ครบ";
	}	
?>
	