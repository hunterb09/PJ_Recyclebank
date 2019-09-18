<?php
	//สร้างแถบเมนู
	require("navbar_a.html");
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
						<td width="10%"><input type="text" name="name"></td>
					</tr>

					<tr>
						<td class="text-right" width="10%">ราคา: </td>
						<td width="10%"><input type="text" name="pirce">บาท</td>
					</tr>
					<tr>
						<td class="text-right" width="10%">จำนวน: </td>
						<td width="10%"><input type="text" name="amount"></td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="Reset">
			<input type="submit" value="OK">
		</form>
		<br><a href='stationary_show.php'>ย้อนกลับ </a>
	</body>
</html>