<?php
	$Tdate = $_POST['Tdate'];
	$MID = $_POST['MID'];
	$Gname = $_POST['Gname'];
	$Tpirce = $_POST['Tpirce'];
	$Tamount = $_POST['Tamount'];
	$Ttotal = $_POST['Ttotal'];
	$Tdbalance = $_POST['Ttotal'];
	$Twbalance = $_POST['Ttotal'];
	$Tbalance = $_POST['Mbalance'];

	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "insert into trade (Tdate, MID, Gname, Tpirce, Tamount, Ttotal, Tdbalance, Twbalance, Tbalance)".
	"values('$Tdate', '$MID', '$Gname', '$Tpirce', '$Tamount', '$Ttotal', '$Tdbalance', '$Twbalance', '$Tbalance')";
	$result = mysqli_query($link,$sql);	

	require("trade_search.php");
?>
