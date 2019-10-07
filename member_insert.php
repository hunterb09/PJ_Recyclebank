<?php
	$MID = $_POST['MID'];
	$Mname = $_POST['Mname'];
	$Mdate = $_POST['Mdate'];
	$Mposition = $_POST['Mposition'];
	$Mbranch = $_REQUEST['Mbranch'];
	$MstuID = $_POST['MstuID'];
	$Myear = $_REQUEST['Myear'];
	$MphoneN = $_POST['MphoneN'];
	$Memail = $_POST['Memail'];
	
	//เชื่อมต่อฐานข้อมูล 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
		
	$sql = "insert into member (MID, Mname, Mdate, Mposition, Mbranch, MstuID, Myear, MphoneN, Memail)".
	"values('$MID', '$Mname', '$Mdate', '$Mposition', '$Mbranch', '$MstuID', '$Myear', '$MphoneN', '$Memail')";
	$result = mysqli_query($link,$sql);	
	
	//สร้างแถบเมนู
	require("member_show.php");
?>