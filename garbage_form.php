<?php
	//สร้างแถบเมนู
	require("navbar_a.html");
?>
<html>
	<head>
		<title>Recycle Bank</title>
	</head>
	<body>
		<h2><u> เพิ่มขยะ  </u></h2><br>
		<form method=post action="garbage_insert.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">ประเภทขยะ: </td>
						<td width="10%">
							<select name="type">
								<option value="พลาสติก">พลาสติก</option>
								<option value="กระดาษ">กระดาษ</option>
								<option value="แก้ว">แก้ว</option>
								<option value="โลหะ">โลหะ</option>
							</select>
					</tr>
					<tr>
						<td class="text-right" width="10%">ชื่อขยะ: </td>
						<td width="10%"><input type="text" name="name"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">ราคาขยะ: </td>
						<td width="10%"><input type="text" name="pirce">บาท/โล</td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="Reset">
			<input type="submit" value="OK">
		</form>
		<br><a href='garbage_show.php'>ย้อนกลับ </a>
	</body>
</html>