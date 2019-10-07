<?php
	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM stationary WHERE SID = '".$_POST['id']."' ";
	$result = mysqli_query($link,$sql);
	session_start();
	//สร้างแถบเมนู
	require("navbar_officer.php");

	//$name = $_POST['name'];
	echo "<h2><u> เครื่องเขียน </u></h2><br>";
	echo "<br>";
	echo "<table border='1' align='center' width='500'>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>รหัสเครื่องเขียน</td>
			<td>ชื่อเครื่องเขียน</td>
			<td>กลุ่มเครื่องเขียน</td>
			<td>ราคาเครื่องเขียน</td>
		  </tr>";
	while($row = mysqli_fetch_array($result)) {
     echo "<tr>";
        echo "<td>" .$row["SID"] .  "</td> ";
        echo "<td>" .$row["Sname"] .  "</td> ";
        echo "<td>" .$row["Sgroup"] .  "</td> ";
        echo "<td>" .$row["Spirce"] .  "</td> ";
     echo "</tr>";
    }

	 echo "</table><br>";
	 echo "<a href='stationary_show.php'> ย้อนกลับ </a>";
?>