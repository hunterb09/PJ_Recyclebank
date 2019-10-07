<meta charset="UTF-8">
<?php

	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM member ORDER BY MID asc" or die("Error:" . mysqli_error());
	$result = mysqli_query($link,$sql);
	session_start();
	
	//เช็คว่าเป็นผู้ใช้งานหรือแอดมินหรือไม่
	require("navbar_officer.php");

	echo '<h2><u> สมาชิก  </u></h2><br>';
	echo '<a href="member_search.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ค้นหาสมาชิก </a>
		 <a href="member_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มสมาชิก </a>';
	echo '<p></p>';
	
	//หัวข้อตาราง
	echo "<table border='1' align='center' width='80%'>";
	echo "<tr>";
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
			<td>แก้ไข</td>
			<td>ลบ</td>
		  </tr>";
		  
	while($row = mysqli_fetch_array($result)) {
	  echo "<tr align='center'>";
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
		  
		  $MID = $row["MID"];
		  $_SESSION["MID"] = $row["MID"];
		  //แก้ไขข้อมูล
		  echo "<td><a href='member_update_form.php?MID=$row[0]'>แก้ไข</a></td> ";

		  //ลบข้อมูล
		  echo "<td><a href='member_delete.php?MID=$row[0] ' onclick=\"return confirm('ต้องการที่จะลบสมาชิกหรือไม่ ')\">ลบ</a></td> ";
	  echo "</tr>";
	}
	echo "</table>";
?>
