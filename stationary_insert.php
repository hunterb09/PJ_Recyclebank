<?php
	$name = $_POST['name'];
	$pirce = $_POST['pirce'];
	$amount = $_POST['amount'];

	//เชื่อมต่อฐานข้อมูล 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
		
	$sql = "insert into stationary (Sname, Spirce, Samount)".
	"values('$name', '$pirce', '$amount')";
	$result = mysqli_query($link,$sql);	
	
	//สร้างแถบเมนู
	require("stationary_show.php");
?>