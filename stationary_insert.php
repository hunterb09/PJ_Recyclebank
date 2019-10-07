<?php
	$Sname = $_POST['Sname'];
	$Sgroup = $_POST['Sgroup'];
	$Spirce = $_POST['Spirce'];

	//เชื่อมต่อฐานข้อมูล 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
		
	$sql = "insert into stationary (Sname, Sgroup, Spirce)".
	"values('$Sname', '$Sgroup', '$Spirce')";
	$result = mysqli_query($link,$sql);	
	
	//สร้างแถบเมนู
	require("stationary_show.php");
?>