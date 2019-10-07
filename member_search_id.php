<?php
	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM member WHERE MID = '".$_POST['id']."' ";
	$result = mysqli_query($link,$sql);
	session_start();
	//สร้างแถบเมนู
	require("navbar_officer.php");

	echo "<h2><u>สมาชิก</u></h2><br>";
	echo "<br>";
	echo "<table border='1' align='center' width='80%'>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>รหัสสมาชิก</td>
			<td>ชื่อ-นามสกุล</td>
			<td>วัน/เดือน/ปี เกิด</td>
			<td>ตำแหน่ง</td>
			<td>สาขา</td>
			<td>รหัสนักศึกษา</td>
			<td>ชั้นปี</td>
			<td>หมายเลขโทรศัพท์</td>
			<td>อีเมล์</td>
			<td>จำนวนเงินปัจจุบัน</td>
		  </tr>";

	while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
        echo "<td>" .$row["MID"] .  "</td> ";
        echo "<td>" .$row["Mname"] .  "</td> ";
        echo "<td>" .$row["Mdate"] .  "</td> ";
        echo "<td>" .$row["Mposition"] .  "</td> ";
        echo "<td>" .$row["Mbranch"] .  "</td> ";
        echo "<td>" .$row["MstuID"] .  "</td> ";
        echo "<td>" .$row["Myear"] .  "</td> ";
        echo "<td>" .$row["MphoneN"] .  "</td> ";
        echo "<td>" .$row["Memail"] .  "</td> ";
        echo "<td>" .$row["Mbalance"] .  "</td> ";
    echo "</tr>";}

	 echo "</table><br>";
	 echo "<a href='member_search.php?ID='> ย้อนกลับ </a>";
?>
