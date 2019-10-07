<meta charset="UTF-8">
<?php
	//1. เชื่อมต่อ database: 
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);	
	$sql = "SELECT * FROM officer ORDER BY OID asc" or die("Error:" . mysqli_error()); 
	$result = mysqli_query($link,$sql);	
	session_start();
	
	//เช็คว่าเป็นเจ้าหน้าที่หรือแอดมินหรือไม่
	require("navbar_officer.php");

	echo '<h2><u> เจ้าหน้าที่  </u></h2><br>';
	echo '<a href="officer_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มเจ้าหน้าที่ </a><p></p>';
	 
	echo "<table border='1' align='center' width='80%'>";
	//หัวข้อตาราง
	echo "<tr align='center' bgcolor='#CCCCCC'><td>ลำดับ</td><td>ไอดี</td><td>พาสเวิร์ด</td><td>ชื่อ</td><td>สเตตัส</td><td>แก้ไข</td><td>ลบ</td></tr>";
	while($row = mysqli_fetch_array($result)) { 
	  echo "<tr align='center'>";
	  echo "<td>" .$row["OID"] .  "</td> "; 
	  echo "<td>" .$row["ID"] .  "</td> "; 
	  echo "<td>" .$row["Opassword"] .  "</td> ";
	  echo "<td>" .$row["Oname"] .  "</td> ";
	  echo "<td>" .$row["Ostatus"] .  "</td> ";
	  $OID = $row["OID"];
	  //แก้ไขข้อมูล
	  echo "<td><a href='officer_update_form.php?OID=$row[0]'>แก้ไข</a></td> ";
	  
	  //ลบข้อมูล
	  echo "<td><a href='officer_delete.php?OID=$row[0]' onclick=\"return confirm('ต้องการที่จะลบผู้ใช้งานหรือไม่ ')\">ลบ</a></td> ";
	  echo "</tr>";
	}
	echo "</table>";

?>