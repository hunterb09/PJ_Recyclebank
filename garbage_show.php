<?php
	//navbar_officer.php, garbage_search.php, garbage_form.php
	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM garbage ORDER BY GID asc" or die("Error:" . mysqli_error());
	$result = mysqli_query($link,$sql);
	session_start();
	//สร้างแถบเมนู
	require("navbar_officer.php");

	echo '<h2><u> ขยะ  </u></h2><br>';
	echo '<a href="garbage_search.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ค้นหาขยะ </a>
		 <a href="garbage_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มขยะ </a>';
	echo '<p></p>';
	
	//หัวข้อตาราง
	//echo "<form method=post>";
	echo "<table border='1' align='center' width='500'>";
	echo "<tr>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>รหัส </td>
			<td>ประเภทขยะ </td>
			<td>ชื่อขยะ </td>
			<td>กลุ่มขยะ </td>
			<td>ราคา </td>
			<td>แก้ไข </td>
			<td>ลบ </td>
		  </tr>";
		  
	while($row = mysqli_fetch_array($result)) {
	  echo "<tr align='center'>";
	 	  echo "<td>" .$row["GID"] .  "</td> ";
		  echo "<td>" .$row["Gtype"] .  "</td> ";
		  echo "<td>" .$row["Gname"] .  "</td> ";
		  echo "<td>" .$row["Ggroup"] .  "</td> ";
		  echo "<td>" .$row["Gpirce"] .  "</td> ";
			
		$_SESSION['GID'] = $row["GID"];
		//แก้ไขข้อมูล
		echo "<td><a href='garbage_update_form.php?GID=$row[0]'>แก้ไข</a></td> ";
	  
		//ลบข้อมูล
		echo "<td><a href='garbage_delete.php?GID=$row[0] ' onclick=\"return confirm('ต้องการที่จะลบขยะหรือไม่ ')\">ลบ</a></td> ";
	  echo "</tr>";
	}
	echo "</table>";
	mysqli_close($link);	
	//echo "</form>";
?>
