<?php
	$type = $_REQUEST['type'];
	$name = $_POST['name'];
	$pirce = $_POST['pirce'];

	//เชื่อมต่อฐานข้อมูล 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
		
	$sql = "insert into garbage (Gtype, Gname, Gpirce)".
	"values('$type', '$name', '$pirce')";
	$result = mysqli_query($link,$sql);	
	
	//สร้างแถบเมนู
	require("garbage_show.php");
?>