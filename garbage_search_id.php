<?php
	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM garbage WHERE GID = '".$_POST['id']."' ";
	$result = mysqli_query($link,$sql);
	//สร้างแถบเมนู
	require("navbar_a.html");
	$row = mysqli_fetch_array($result);
	//$name = $_POST['name'];
	echo "<h2><u>"  .$row["Gname"] . "</u></h2><br>";
	echo "<br>";
	echo "<table border='1' align='center' width='500'>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>รหัส </td>
			<td>ประเภทขยะ </td>
			<td>ชื่อขยะ </td>
			<td>ราคา </td>
		  </tr>";

	echo "<tr>";
		  echo "<td>" .$row["GID"] .  "</td> ";
		  echo "<td>" .$row["Gtype"] .  "</td> ";
		  echo "<td>" .$row["Gname"] .  "</td> ";
		  echo "<td>" .$row["Gpirce"] .  "</td> ";
		  //แก้ไขข้อมูล
		  //echo "<td><a href='garbage_edit.php?ID=$row[0]'>edit</a></td> ";

	 echo "</tr>";
	 echo "<table><br>";
	 echo "<a href='garbage_search.php?ID='> ย้อนกลับ </a>";
?>