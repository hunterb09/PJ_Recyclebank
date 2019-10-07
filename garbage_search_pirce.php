<?php
	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM garbage WHERE Gpirce = '".$_POST['pirce']."' ";
	$result = mysqli_query($link,$sql);
	session_start();
	//สร้างแถบเมนู
	require("navbar_officer.php");

	echo "<h2><u>ขยะ</u></h2><br>";
	echo "<br>";
	echo "<table border='1' align='center' width='500'>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>รหัส </td>
			<td>ประเภทขยะ </td>
			<td>ชื่อขยะ </td>
			<td>กลุ่มขยะ </td>
			<td>ราคา </td>
		  </tr>";

	while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
		echo "<td>" .$row["GID"] .  "</td> ";
		echo "<td>" .$row["Gtype"] .  "</td> ";
		echo "<td>" .$row["Gname"] .  "</td> ";
		echo "<td>" .$row["Ggroup"] .  "</td> ";
		echo "<td>" .$row["Gpirce"] .  "</td> ";
	echo "</tr>";
		  }

	 echo "</tr>";
	 echo "<table><br>";
	 echo "<a href='garbage_search.php?ID='> ย้อนกลับ </a>";
?>