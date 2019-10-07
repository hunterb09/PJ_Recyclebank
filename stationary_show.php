<meta charset="UTF-8">
<?php
	//1. เชื่อมต่อ database: 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);	
	$sql = "SELECT * FROM stationary ORDER BY SID asc" or die("Error:" . mysqli_error()); 
	$result = mysqli_query($link,$sql);	
	session_start();
	//สร้างแถบเมนู
	require("navbar_officer.php");

	echo '<h2><u> เครื่องเขียน </u></h2><br>';
	echo '<a href="stationary_search.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ค้นหาเครื่องเขียน </a>
		 <a href="stationary_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มเครื่องเขียน </a>';
	echo '<p></p>';
	 
	echo "<table border='1' align='center' width='500'>";
	//หัวข้อตาราง
	echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>ชื่อเครื่องเขียน</td><td>กลุ่มเครื่องเขียน</td><td>ราคาเครื่องเขียน</td><td>แก้ไข</td><td>ลบ</td></tr>";
	while($row = mysqli_fetch_array($result)) { 
	  echo "<tr align='center'>";
	  echo "<td>" .$row["SID"] .  "</td> ";
	  echo "<td>" .$row["Sname"] .  "</td> ";  
	  echo "<td>" .$row["Sgroup"] .  "</td> ";
	  echo "<td>" .$row["Spirce"] .  "</td> ";
	  $_SESSION['SID'] = $row["SID"];
	  //แก้ไขข้อมูล
	  echo "<td><a href='stationary_update_form.php?SID=$row[0]'>แก้ไข</a></td> ";
	  
	  //ลบข้อมูล
	  echo "<td><a href='stationary_delete.php?SID=$row[0] ' onclick=\"return confirm('ต้องการที่จะลบผู้ใช้งานหรือไม่ ')\">ลบ</a></td> ";
	  echo "</tr>";	
	}
	echo "</table>";
	mysqli_close($link);
?>