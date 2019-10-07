<?php
	//1. เชื่อมต่อ database:

	session_start();
	//เช็คว่าเป็นผู้ใช้งานหรือแอดมินหรือไม่
	require("navbar_officer.php");
	echo '<br><a href="trade_search.php">ย้อนกลับ </a>';
	echo '<h2><u> ระบบรับซื้อขยะ  </u></h2>';
	echo '<h3><u> ฝากถอน  </u></h3><br>';
?>
<!doctype html>
<html lang="th">
	<head>
		<meta charset="utf-8">
		<title>Recycle Bank</title>
	</head>
	<body>
		
		<form method=post action="">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<!--<td class="text-right" width="10%">รหัสสมาชิก:</td> <td class="text-left" width="10%"><input type="text" name="MID" value="<?php //echo $row["MID"]; ?>"></td>-->
						<td class="text-right" width="10%">รหัสสมาชิก:</td> <td class="text-left" width="10%"> <?php echo $row["MID"]; ?></td>
						<td class="text-right" width="10%">ชื่อ:</td> <td class="text-left" width="10%"><?php echo $row["Mname"]; ?></td>
						<td class="text-right" width="10%">ยอดเงินปัจจุบัน =</td> <td class="text-left" width="10%"> <?php echo $row["Mbalance"]; ?>บาท </td>
					</tr>
				</tbody>
			</table>
		</form>
		<!--
		<a href="#" onclick="MyFunction();" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ฝากขยะ </a>
		<a href="#" onclick="MyFunction();" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ถอน </a><br><br>
		-->
		<form method=post action="trade_show_member.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td>
					</tr>
					<tr>
						<td class="text-right" width="10%">วันที่: </td>
						<td class="text-left" width="10%"><input type="date" name="Tdate"></td>
						<td class="text-right" width="10%">กลุ่มขยะ: </td>
						<td class="text-left" width="10%">
							<select name="Ggroup">
								<option value="01/05/2019-30/06/2019">01/05/2019-30/06/2019</option>
								<option value="01/07/2019+">01/07/2019+</option>
							</select>
						</td>
						<td><a href='officer_update_form.php?Ggroup=Ggroup'>ค้นหา</a></td>
						<td class="text-right" width="10%">รายการขยะ:</td>
							<td class="text-left"><select name="Gname">
								<option value="พลาสติกกรอบ	">พลาสติกกรอบ	</option>
								<option value="พลาสติกรวม">พลาสติกรวม</option>
								<option value="พลาสติกใส(แกะ)">พลาสติกใส(แกะ)</option>
								<option value="กระดาษขาวดำ">กระดาษขาวดำ</option>
								<option value="กระดาษสี">กระดาษสี</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td>
					</tr>
					<tr>
						<td class="text-right" width="10%" height="50">ราคา: </td>
						<td class="text-left" width="10%"><input type="text" name="Tpirce">/โล</td>
						<td class="text-right" width="10%" height="50">จำนวน: </td>
						<td class="text-left" width="20%"><input type="text" name="Tamount">กิโลกรัม</td>
						<td class="text-left" width="5%"><input type="submit" value="คำนวณ"></td>
						<td class="text-right" width="5%" height="50">ราคารวม: </td>
						<td class="text-left" width="15%"><input type="text" name="Ttotal">บาท</td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="ล้าง">
			<input type="submit" value="บันทึก">
		</form>
	</body>
</html>

<?php

	//หัวข้อตาราง
	echo "<table border='1' align='center' width='700'>";
	echo "<tr>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>ลำดับ </td>
			<td>วันที่ </td>
			<td>รหัสสมาชิก </td>
			<td>รหัสขยะ </td>
			<td>รหัสเครื่องเขียน </td>
			<td>ราคา </td>
			<td>จำนวน </td>
			<td>ราคารวม</td>
			<td>ยอดเงินฝาก </td>
			<td>ยอดเงินถอน </td>
			<td>ยอดคงเหลือ</td>
		  </tr>";
		  
	echo "</table>";
?>
