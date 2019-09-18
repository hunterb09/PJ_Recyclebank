<?php

	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM member ORDER BY MID asc" or die("Error:" . mysqli_error());
	$result = mysqli_query($link,$sql);
	//สร้างแถบเมนู
	require("navbar_a.html");
	echo '<h2><u> สมาชิก  </u></h2><br>';
	echo '<a href="garbage_search.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ค้นหาสมาชิก </a>
		 <a href="member_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มสมาชิก </a>';
	echo '<p></p>';
	
	//หัวข้อตาราง
	echo "<table border='1' align='center' width='900'>";
	echo "<tr>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>รหัส </td>
			<td>คำนำหน้า </td>
			<td>ชื่อ </td>
			<td>นามสกุล </td>
			<td>ตำแหน่ง </td>
			<td>สาขา </td>
			<td>ชั้นปี </td>
			<td>รหัสนักศึกษา </td>
			<td>วันเดือนปีที่สมัคร </td>
			<td>แก้ไข </td>
			<td>ลบ </td>
		  </tr>";
		  
	session_start();
	while($row = mysqli_fetch_array($result)) {
	  echo "<tr align='center'>";
		  echo "<td>" .$row["MID"] .  "</td> ";
		  echo "<td>" .$row["Mtitle"] .  "</td> ";
		  echo "<td>" .$row["Mname"] .  "</td> ";
		  echo "<td>" .$row["Mlastname"] .  "</td> ";
		  echo "<td>" .$row["Mposition"] .  "</td> ";
		  echo "<td>" .$row["Mbranch"] .  "</td> ";
		  echo "<td>" .$row["Myear"] .  "</td> ";
		  echo "<td>" .$row["MstuID"] .  "</td> ";
		  echo "<td>" .$row["Mdate"] .  "</td> ";
		  
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
