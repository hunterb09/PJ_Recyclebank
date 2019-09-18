<?php

	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM garbage ORDER BY GID asc" or die("Error:" . mysqli_error());
	$result = mysqli_query($link,$sql);
	//สร้างแถบเมนู
	require("navbar_a.html");
	echo '<h2><u> ขยะ  </u></h2><br>';
	echo '<a href="garbage_search.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ค้นหาขยะ </a>
		 <a href="garbage_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มขยะ </a>';
	echo '<p></p>';
	
	//หัวข้อตาราง
	echo "<form method=post>";
	echo "<table border='1' align='center' width='500'>";
	echo "<tr>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>รหัส </td>
			<td>ประเภทขยะ </td>
			<td>ชื่อขยะ </td>
			<td>ราคา </td>
			<td>แก้ไข </td>
			<td>ลบ </td>
		  </tr>";
		  
	while($row = mysqli_fetch_array($result)) {
	  echo "<tr align='center'>";
		  echo "<td>" .$row["GID"] .  "</td> ";
		  echo "<td>" .$row["Gtype"] .  "</td> ";
		  echo "<td>" .$row["Gname"] .  "</td> ";
		  echo "<td>" .$row["Gpirce"] .  "</td> ";
			
		$GID = $row["GID"];
		  //แก้ไขข้อมูล
		  //echo "<td><a href='garbage_edit.php?ID=$row[0]'>edit</a></td> ";
		  echo "<td value='$row[GID]'><a name='$GID' id='$GID' href='garbage_edit.php?ID=$GID'>แก้ไข </a></td>";
	
		  //ลบข้อมูล
		  echo "<td><a href='garbage_delete.php?ID=$row[GID]' onclick=\"return confirm('ต้องการที่จะลบผู้ใช้งานหรือไม่ ')\">ลบ</a></td> ";
	  echo "</tr>";
	}
	echo "</table>";
	echo "</form>";
?>
