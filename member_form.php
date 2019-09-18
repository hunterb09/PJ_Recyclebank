<?php
	//สร้างแถบเมนู
	require("navbar_a.html");
?>
<html>
	<head>
		<title>Recycle Bank</title>
	</head>
	<body>
		<h2><u> เพิ่มสมาชิก  </u></h2><br>
		<form method=post action="member_insert.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">คำนำหน้า: </td>
						<td width="10%"><input type="text" name="title"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">ชื่อ: </td>
						<td width="10%"><input type="text" name="name"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">นามสกุล: </td>
						<td width="10%"><input type="text" name="lastname"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">ตำแหน่ง: </td>
						<td width="10%"><input type="text" name="position"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">สาขาวิชา: </td>
						<td>
							<select name="branch">
								<option value=""></option>
								<option value="การตลาด">การตลาด</option>
								<option value="ระบบสารสนเทศทางธุรกิจ">ระบบสารสนเทศทางธุรกิจ(BIS)</option>
								<option value="วิทยาศาสตร์และเทคโนโลยีคอมพิวเตอร์">วิทยาศาสตร์และเทคโนโลยีคอมพิวเตอร์(CSnT)</option>
								<option value="เกษตรป่าไม้">เกษตรป่าไม้</option>
								<option value="การบัญชี">การบัญชี</option>
								<option value="การจัดการชุมชน">การจัดการชุมชน</option>
								<option value="พัฒนาการท่องเที่ยว">พัฒนาการท่องเที่ยว</option>
								<option value="เศรษฐศาสตร์ประยุกต์เพื่อการพัฒนาชุมชน">เศรษฐศาสตร์ประยุกต์เพื่อการพัฒนาชุมชน</option>
								<option value="รัฐศาสตร์">รัฐศาสตร์</option>
								<option value="เทคโนโลยีชีวภาพทางอุตสาหกรรมเกษตร">เทคโนโลยีชีวภาพทางอุตสาหกรรมเกษตร</option>
								<option value="ชีววิทยาประยุกต์">ชีววิทยาประยุกต์</option>
								<option value="เทคโนโลยีการอาหาร">เทคโนโลยีการอาหาร</option>
								<option value="เทคโนโลยีการผลิตพืช">เทคโนโลยีการผลิตพืช</option>
								<option value="เทคโนโลยีการผลิตสัตว์">เทคโนโลยีการผลิตสัตว์</option>
								<option value="เทคโนโลยีอุตสาหกรรมป่าไม้">เทคโนโลยีอุตสาหกรรมป่าไม้</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="text-right" width="10%">ชั้นปี: </td>
						<td>
							<select name="year">
								<option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="4+">4+</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="text-right" width="10%">รหัสนักศึกษา: </td>
						<td width="10%"><input type="text" name="stuid"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">วัน/เดือน/ปีที่สมัคร: </td>
						<td width="10%"><input type="date" name="date"></td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="Reset">
			<input type="submit" value="OK">
		</form>
		<br><a href='member_show.php'>ย้อนกลับ </a>
	</body>
</html>