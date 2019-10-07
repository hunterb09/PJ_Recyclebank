<?php
	session_start();
	//สร้างแถบเมนู
	require("navbar_officer.php");
?>
<html>
	<head>
		<title>Recycle Bank</title>
	</head>
	<body>
		<h2><u> ค้นหาเครื่องเขียน </u></h2><br>
		<form method=post action="stationary_search_id.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากรหัส: </td>
						<td class="text-left" width="10%"><input type="text" name="id"><input type="submit" value="ค้นหา"></td>
					</tr>
				</tbody>
			</table>
		</form>
		
		<form method=post action="stationary_search_name.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากชื่อ: </td>
						<td class="text-left" width="10%"><input type="text" name="name"><input type="submit" value="ค้นหา"> </td>
					</tr>
				</tbody>
			</table>
		</form>
		
		<br><a href='stationary_show.php'>ย้อนกลับ </a>
		
	</body>
</html>
