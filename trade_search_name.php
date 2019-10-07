<?php
	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM member WHERE Mname = '".$_POST['name']."' ";
	$result = mysqli_query($link,$sql);
    
	$row = mysqli_fetch_array($result);
	//$name = $_POST['name'];
	require("trade_show.php");
?>
