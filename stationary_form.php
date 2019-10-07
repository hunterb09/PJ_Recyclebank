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
		<h2><u> เพิ่มเครื่องเขียน  </u></h2><br>
		<form method=post action="stationary_insert.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">ชื่อเครื่องเขียน: </td>
						<td class="text-left" width="10%"><input type="text" name="Sname"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">กลุ่มเครื่องเขียน: </td>
						<td class="text-left">
							<select name="Sgroup">
								<option value="01/05/2019+">01/05/2019+</option>
								<option value=""></option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="text-right" width="10%">ราคา: </td>
						<td class="text-left" width="10%"><input type="text" name="Spirce">บาท</td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="Reset">
			<input type="submit" value="OK">
		</form>
		<br><a href='stationary_show.php'>ย้อนกลับ </a>
	</body>
</html>