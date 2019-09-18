<?php
	session_start();
	
	if($_SESSION['Status'] == "admin"){
			
	}
	else{
		header("location:login.html");
	}
	//สร้างแถบเมนู
	require("navbar_a.html");
?>
<html>
	<head>
		<title>Recycle Bank</title>
	</head>
	<body>
		<h2><u> เพิ่มผู้ใช้งาน  </u></h2><br>
		<form method=post action="officer_insert.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">Username: </td>
						<td width="10%"><input type="text" name="user"></td>
					</tr>

					<tr>
						<td class="text-right" width="10%">Password: </td>
						<td width="10%"><input type="password" name="pass"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">Name: </td>
						<td width="10%"><input type="text" name="name"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">Status: </td>
						<td width="10%"><input type="radio" name="status" onclick="check(this.value)" value="admin">admin
							<input type="radio" name="status" onclick="check(this.value)" value="officer">officer</td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="Reset">
			<input type="submit" value="OK">
		</form>
		<br><a href='officer_show.php'>ย้อนกลับ </a>
	</body>
</html>