<meta charset="UTF-8">
<?php
	//1. เชื่อมต่อ database: 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);	
	$sql = "SELECT * FROM officer ORDER BY OfficerID asc" or die("Error:" . mysqli_error()); 
	$result = mysqli_query($link,$sql);	
	 
	session_start();
	if($_SESSION['Status'] == "admin"){
			
	}
	else{
		header("location:login.html");
	}
	//สร้างแถบเมนู
	require("navbar_a.html");
	echo '<h2><u> ผู้ใช้งาน  </u></h2><br>';
	echo '<a href="officer_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มผู้ใช้งาน </a><p></p>';
	 
	echo "<table border='1' align='center' width='500'>";
	//หัวข้อตาราง
	echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>ไอดี</td><td>พาสเวิร์ด</td><td>ชื่อ</td><td>สเตตัส</td><td>แก้ไข</td><td>ลบ</td></tr>";
	while($row = mysqli_fetch_array($result)) { 
	  echo "<tr align='center'>";
	  echo "<td>" .$row["OfficerID"] .  "</td> "; 
	  echo "<td>" .$row["Username"] .  "</td> ";  
	  echo "<td>" .$row["Password"] .  "</td> ";
	  echo "<td>" .$row["Name"] .  "</td> ";
	  echo "<td>" .$row["Status"] .  "</td> ";
	  $OfficerID = $row["OfficerID"];
	  //แก้ไขข้อมูล
	  echo "<td><a href='officer_edit.php?ID=$row[0]'>edit</a></td> ";
	  
	  //ลบข้อมูล
	  echo "<td><a href='officer_delete.php?ID=$row[0]' onclick=\"return confirm('ต้องการที่จะลบผู้ใช้งานหรือไม่ ')\">del</a></td> ";
	  echo "</tr>";
	}
	echo "</table>";

?>