<?php
	$Gtype = $_REQUEST['Gtype'];
	$Gname = $_POST['Gname'];
	$Ggroup = $_REQUEST['Ggroup'];
	$Gpirce = $_POST['Gpirce'];

	//เชื่อมต่อฐานข้อมูล 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
		
	$sql = "insert into garbage (Gtype, Gname, Ggroup, Gpirce)".
	"values('$Gtype', '$Gname', '$Ggroup', '$Gpirce')";
	$result = mysqli_query($link,$sql);	
	
	//สร้างแถบเมนู
	require("garbage_show.php");
?>