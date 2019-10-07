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
		<h2><u> เพิ่มขยะ  </u></h2><br>
		<form method=post action="garbage_insert.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">ประเภทขยะ: </td>
						<td class="text-left" width="10%">
							<select name="Gtype">
								<option value="พลาสติก">พลาสติก</option>
								<option value="กระดาษ">กระดาษ</option>
								<option value="แก้ว">แก้ว</option>
								<option value="โลหะ">โลหะ</option>
							</select>
					</tr>
					<tr>
						<td class="text-right" width="10%">ชื่อขยะ: </td>
						<td class="text-left" width="10%"><input type="text" name="Gname"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">กลุ่มขยะ: </td>
						<td class="text-left">
							<select name="Ggroup">
								<option value="01/05/2019-30/06/2019">01/05/2019-30/06/2019</option>
								<option value="01/07/2019+">01/07/2019+</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="text-right" width="10%">ราคาขยะ: </td>
						<td class="text-left" width="10%"><input type="text" name="Gpirce">บาท/โล</td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="Reset">
			<input type="submit" value="OK">
		</form>
		<br><a href='garbage_show.php'>ย้อนกลับ </a>
	</body>
</html>