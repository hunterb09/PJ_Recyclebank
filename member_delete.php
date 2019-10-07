<?php
	//เชื่อมต่อฐานข้อมูล 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$MID = mysqli_real_escape_string($link,$_GET['MID']);
	$sql = "DELETE FROM member WHERE MID = $MID ";
	$result = mysqli_query($link,$sql);	
	if ($result)
		{
			echo "<script type='text/javascript'>";
			echo "alert('การลบข้อมูลสำเร็จ');";
			echo "window.location = 'member_show.php'; ";
			echo "</script>";
			mysqli_close($link);
		}
	else
		{
			echo "<script type='text/javascript'>";
			echo "alert('ไม่สามารถลบข้อมูลได้');";
			echo "window.location = 'member_show.php'; ";
			echo "</script>";
		}
	//สร้างแถบเมนู
	require("member_show.php");
?>