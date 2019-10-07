<?php

	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM member WHERE MID = '".$_POST['id']."' ";
	//$sql = "SELECT member.Mname  FROM trade INNER JOIN member ON trade.TMID = member.MID WHERE MID = '".$_POST['id']."' ";
	$result = mysqli_query($link,$sql);
	//สร้างแถบเมนู
	require("navbar_a.html");
	//เช็คว่าเป็นผู้ใช้งานหรือแอดมินหรือไม่
	//require("navbar_officer.php");

	//หัวข้อตาราง
	echo "<table border='1' align='center' width='900'>";
	echo "<tr>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>ชื่อ </td>
			<td>ยอดเงิน</td>
		  </tr>";
		  
	session_start();
	while($row = mysqli_fetch_array($result)) {
	  echo "<tr align='center'>";
		  echo "<td>" .$row["Mname"] .  "</td> ";
		  echo "<td>" .$row["Mlastname"] .  "</td> ";
		  
		  $MID = $row["MID"];
		  $_SESSION["MID"] = $row["MID"];
		  //แก้ไขข้อมูล
		  //echo "<td><a href='garbage_edit.php?ID=$row[0]'>edit</a></td> ";
		  echo "<td><a href='garbage_edit.php?ID=$_SESSION[MID]'>แก้ไข </a></td>";

		  //ลบข้อมูล
		  echo "<td><a href='garbage_delete.php?ID=$_SESSION[MID]' onclick=\"return confirm('ต้องการที่จะลบผู้ใช้งานหรือไม่ ')\">ลบ</a></td> ";
	  echo "</tr>";
	}
	echo "</table>";
?>
