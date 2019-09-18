<?php
	$name = $_POST['name'];
	$pirce = $_POST['pirce'];

	//เชื่อมต่อฐานข้อมูล 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
		
	$sql = "update into garbage (Gname, GPirce)".
	"values('$name', '$pirce')";
	$result = mysqli_query($link,$sql);	
	
	//สร้างแถบเมนู
	require("garbage_show.php");
?>