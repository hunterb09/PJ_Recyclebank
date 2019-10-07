<?php
	$OID = $_POST['OID'];
	$Opassword = $_POST['Opassword'];
	$Oname = $_POST['Oname'];
	$Ostatus = $_REQUEST['Ostatus'];

	//เข้ารหัส รหัสผ่าน
	$salt = 'fjdkslarueiwoqp';
	$hash_login_password = hash_hmac('sha256', $Opassword, $salt);


	if($Ostatus == "admin" || $Ostatus == "officer")
	{
		//เชื่อมต่อฐานข้อมูล 
		$link = mysqli_connect("localhost", "root");
		mysqli_set_charset($link,'utf8');
		$sql = "use recyclebank";
		$result = mysqli_query($link,$sql);
		
		$sql = "insert into officer (OID, Opassword, Oname, Ostatus)".
		"values('$OID', '$hash_login_password', '$Oname', '$Ostatus')";
		$result = mysqli_query($link,$sql);	
		
		if($result){
			header("Location: officer_show.php");
		}else{
			echo "เกิดข้อผิดพลาด". mysqli_error($dbcon); 
		}

		mysqli_close($link);
		//สร้างแถบเมนู
		//require("officer_show.php");
	}
	else //ไม่มีข้อมูล ตามที่ผู้ใช้ล็อกอินเข้ามา
	{
		echo "กรอกข้อมูลไม่ครบ";
	}	
?>
	