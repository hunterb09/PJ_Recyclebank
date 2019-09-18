<?php
	$title = $_POST['title'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$position = $_POST['position'];
	$branch = $_REQUEST['branch'];
	$year = $_REQUEST['year'];
	$stuid = $_POST['stuid'];
	$date = $_POST['date'];
	
	//เชื่อมต่อฐานข้อมูล 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
		
	$sql = "insert into member (Mtitle, Mname, Mlastname, Mposition, Mbranch, Myear, MstuID, Mdate)".
	"values('$title', '$name', '$lastname', '$position', '$branch', '$year', '$stuid', '$date')";
	$result = mysqli_query($link,$sql);	
	
	//สร้างแถบเมนู
	require("member_show.php");
?>