<?php
	session_start();
	//สร้างแถบเมนู
	require("navbar_officer.php");
?>
<html>
	<head>
		<meta content="en-us" http-equiv="Content-Language" />
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />	
		<title>Recycle Bank</title>
	<script type="text/javascript">
		function Validation(){
			var noERROR = true;

			var MID = document.getElementById("MID");	
			if(MID.value.trim().length != 4){
				alert("รหัสสมาชิก ไม่ถูกต้อง");
				noERROR = false;
			}

			var Mname = document.getElementById("Mname");	
			if (Mname.value.trim() == ""){
				alert("กรุณากรอกชื่อ");
				noERROR = false;
			}
			
			if(noERROR == true){
				var form = document.getElementById("form");	
				form.submit();
			}
		}
	</script>
	</head>
	<body>
		<h2><u> เพิ่มสมาชิก  </u></h2><br>
		<form id="form" method=post action="member_insert.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">รหัสสมาชิก:<span style="color: #FF0000;">*</span></td>
						<td class="text-left" width="10%"><input type="text" id="MID" name="MID" placeholder="0001" autofocus></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">ชื่อ-นามสกุล:<span style="color: #FF0000;">*</td>
						<td class="text-left" width="10%"><input type="text" id="Mname" name="Mname" placeholder="ดำรง อยู่ดี"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">วัน/เดือน/ปี เกิด: </td>
						<td class="text-left" width="10%"><input type="date" name="Mdate"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">ตำแหน่ง: </td>
						<td class="text-left" width="10%"><input type="text" name="Mposition" placeholder="นักศึกษา"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">สาขาวิชา: </td>
						<td class="text-left">
							<select name="Mbranch">
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
						<td class="text-right" width="10%">รหัสนักศึกษา: </td>
						<td class="text-left" width="10%"><input type="text" name="MstuID" placeholder="5908113310"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">ชั้นปี: </td>
						<td class="text-left">
							<select name="Myear">
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
						<td class="text-right" width="10%">หมายเลขโทรศัพท์: </td>
						<td class="text-left" width="10%"><input type="text" name="MphoneN" placeholder="0951576921"></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">อีเมล์: </td>
						<td class="text-left" width="10%"><input type="text" name="Memail" placeholder="member2019@gmail.com"></td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="ล้าง">
			<input name="btnSubmit" type="button" value="บันทึก" onclick="Validation();" /></td>
		</form>
		<br><a href='member_show.php'>ย้อนกลับ </a>
	</body>
</html>