<?php
	session_start();
	//เช็คว่าเป็นผู้ใช้งานหรือแอดมินหรือไม่
	require("navbar_officer.php");
?>
<html>
	<head>
		<title>Recycle Bank</title>
	</head>
	<body>
		<h2><u> เพิ่มเจ้าหน้าที่  </u></h2><br>
		<form method=post action="officer_insert.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">ID: </td>
						<td class="text-left" width="10%"><input type="text" name="OID" required autofocus></td>
					</tr>

					<tr>
						<td class="text-right" width="10%">Password: </td>
						<td class="text-left" width="10%"><input type="password" name="Opassword" required></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">Name: </td>
						<td class="text-left" width="10%"><input type="text" name="Oname" required></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">Status: </td>
						<td class="text-left" width="10%">
							<input type="radio" name="Ostatus" onclick="check(this.value)" value="admin">admin
							<input type="radio" name="Ostatus" onclick="check(this.value)" value="officer" checked="checked">officer</td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="ล้าง">
			<input type="submit" value="เพิ่ม">
		</form>
		<br><a href='officer_show.php'>ย้อนกลับ </a>
	</body>
</html>