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
		<h2><u> ค้นหาขยะ  </u></h2><br>
		<form method=post action="garbage_search_id.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากรหัส: </td>
						<td class="text-left" width="10%"><input type="text" name="id"><input type="submit" value="ค้นหา"></td>
					</tr>
				</tbody>
			</table>
		</form>
		
		<form method=post action="garbage_search_type.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากประเภท: </td>
						<td class="text-left" width="10%">
							<select name="type">
								<option value="พลาสติก">พลาสติก</option>
								<option value="กระดาษ">กระดาษ</option>
								<option value="แก้ว">แก้ว</option>
								<option value="โลหะ">โลหะ</option>
							</select>
							<input type="submit" value="ค้นหา"> 
						</td>
					</tr>
				</tbody>
			</table>
		</form>

		<form method=post action="garbage_search_name.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากชื่อ: </td>
						<td class="text-left" width="10%"><input type="text" name="name"><input type="submit" value="ค้นหา"> </td>
					</tr>
				</tbody>
			</table>
		</form>
		

		<form method=post action="garbage_search_group.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากกลุ่ม: </td>
						<td class="text-left" width="10%">
							<select name="group">
								<option value="01/05/2019-30/06/2019">01/05/2019-30/06/2019</option>
								<option value="01/07/2019+">01/07/2019+</option>
							</select>
							<input type="submit" value="ค้นหา"> 
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		
		<form method=post action="garbage_search_pirce.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากราคา: </td>
						<td class="text-left" width="10%"><input type="tinyint" name="pirce"><input type="submit" value="ค้นหา"> </td>
					</tr>
				</tbody>
			</table>
		</form>

		
		<br><a href='garbage_show.php'>ย้อนกลับ </a>
		
	</body>
</html>

