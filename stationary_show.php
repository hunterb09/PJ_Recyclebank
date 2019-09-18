<?php
	//1. เชื่อมต่อ database: 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);	
	$sql = "SELECT * FROM stationary ORDER BY SID asc" or die("Error:" . mysqli_error()); 
	$result = mysqli_query($link,$sql);	
	
	//สร้างแถบเมนู
	require("navbar_a.html");
	echo '<h2><u> เครื่องเขียน </u></h2><br>';
	echo '<a href="stationary_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มเครื่องเขียน </a><p></p>';
	//echo "<p><center><a href='stationary_form.php'>เพิ่มเครื่องเขียน </a></center></p> "; 
	 
	echo "<table border='1' align='center' width='500'>";
	//หัวข้อตาราง
	echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>ชื่อเครื่องเขียน</td><td>ราคา</td><td>จำนวนที่มีอยู่</td><td>แก้ไข</td><td>ลบ</td></tr>";
	while($row = mysqli_fetch_array($result)) { 
	  echo "<tr align='center'>";
	  echo "<td>" .$row["SID"] .  "</td> "; 
	  echo "<td>" .$row["Sname"] .  "</td> ";  
	  echo "<td>" .$row["Spirce"] .  "</td> ";
	  echo "<td>" .$row["Samount"] .  "</td> ";
	  $SID = $row["SID"];
	  //แก้ไขข้อมูล
	  //echo "<td><a href='garbage_edit.php?ID=$row[0]'>edit</a></td> ";
	  echo "<td><a href='garbage_edit.php?ID=$row[0]'>edit</a></td>";
	  
	  //ลบข้อมูล
	  echo "<td><a href='user_delete.php?ID=$row[0]' onclick=\"return confirm('ต้องการที่จะลบผู้ใช้งานหรือไม่ ')\">del</a></td> ";
	  echo "</tr>";
	}
	echo "</table>";

?>