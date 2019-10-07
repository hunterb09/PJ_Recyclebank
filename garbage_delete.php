<?php
	//เชื่อมต่อฐานข้อมูล 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$GID = mysqli_real_escape_string($link,$_GET['GID']);
	$sql = "DELETE FROM garbage WHERE GID = $GID ";
	$result = mysqli_query($link,$sql);	
	if ($result)
		{
			echo "<script type='text/javascript'>";
			echo "alert('การลบข้อมูลสำเร็จ');";
			echo "window.location = 'garbage_show.php'; ";
			echo "</script>";
			mysqli_close($link);
		}
	else
		{
			echo "<script type='text/javascript'>";
			echo "alert('ไม่สามารถลบข้อมูลได้');";
			echo "window.location = 'garbage_show.php'; ";
			echo "</script>";
		}
	//สร้างแถบเมนู
	require("garbage_show.php");
?>