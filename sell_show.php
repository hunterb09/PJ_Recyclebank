<meta charset="UTF-8">
<?php

	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM sellgarbage ORDER BY SGID asc" or die("Error:" . mysqli_error());
	$result = mysqli_query($link,$sql);
	session_start();
	
	//เช็คว่าเป็นผู้ใช้งานหรือแอดมินหรือไม่
	require("navbar_officer.php");

	echo '<h2><u> ข้อมูลขายขยะ  </u></h2><br>';
	echo '<a href="member_search.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ค้นหาสมาชิก </a>
		 <a href="member_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มสมาชิก </a>';
	echo '<p></p>';
	
	//หัวข้อตาราง
	echo "<table border='1' align='center' width='900'>";
	echo "<tr>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>ลำดับขายขยะ</td>
			<td>วันที่ขายขยะ</td>
			<td>รายการ</td>
			<td>ราคาร้าน</td>
			<td>จำนวน</td>
			<td>ราคารวม</td>
			<td>แก้ไข</td>
			<td>ลบ</td>
		  </tr>";
		  
	while($row = mysqli_fetch_array($result)) {
	  echo "<tr align='center'>";
		  echo "<td>" .$row["SGID"] .  "</td> ";
		  echo "<td>" .$row["SGdate"] .  "</td> ";
		  echo "<td>" .$row["SGname"] .  "</td> ";
		  echo "<td>" .$row["SGpirce"] .  "</td> ";
		  echo "<td>" .$row["SGamount"] .  "</td> ";
		  echo "<td>" .$row["SGtotal"] .  "</td> ";
		  
		  $SGID = $row["SGID"];
		  $_SESSION["SGID"] = $row["SGID"];
		  //แก้ไขข้อมูล
		  //echo "<td><a href='garbage_edit.php?ID=$row[0]'>edit</a></td> ";
		  echo "<td><a href='garbage_edit.php?ID=$_SESSION[SGID]'>แก้ไข </a></td>";

		  //ลบข้อมูล
		  echo "<td><a href='garbage_delete.php?ID=$_SESSION[SGID]' onclick=\"return confirm('ต้องการที่จะลบผู้ใช้งานหรือไม่ ')\">ลบ</a></td> ";
	  echo "</tr>";
	}
	echo "</table>";
?>
