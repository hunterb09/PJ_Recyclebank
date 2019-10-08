<?php
	//1. เชื่อมต่อ database:

	session_start();
	//เช็คว่าเป็นผู้ใช้งานหรือแอดมินหรือไม่
	require("navbar_officer.php");
	echo '<br><a href="trade_search.php">ย้อนกลับ </a>';
	echo '<h2><u> ระบบรับซื้อขยะ  </u></h2>';
	echo '<h3><u> ฝากถอน  </u></h3><br>';

	echo '	<form method=post action="trade_show_member.php">';
	echo '		<table border="0" width="80%" align="center">';
	echo '			<tbody>';
	echo '				<tr>';
	echo "					<td class='text-right' width='10%'>รหัสสมาชิก:</td> <td class='text-left' width='10%'> $row[MID] </td>";
	echo "					<td class='text-right' width='10%'>ชื่อ:</td> <td class='text-left' width='10%'> $row[Mname] </td>";
	echo "					<td class='text-right' width='10%'>ยอดเงินปัจจุบัน =</td> <td class='text-left' width='10%'> $row[Mbalance] บาท </td>";
	echo '				</tr>';
	echo '				<tr>';
	echo '					<td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td>';
	echo '				</tr>';
	echo '				<tr>';
	echo '					<td class="text-right" width="10%">วันที่: </td>';
	echo '					<td class="text-left" width="10%"><input type="date" name="Tdate"></td>';
	echo '					<td class="text-right" width="10%">กลุ่มขยะ: </td>';
	echo '					<td class="text-left" width="10%">';
	echo '						<select name="Ggroup">';
	echo '							<option value="01/05/2019-30/06/2019">01/05/2019-30/06/2019</option>';
	echo '							<option value="01/07/2019+">01/07/2019+</option>';
	echo '					</select>';
	echo '				</td>';
	echo "					<td><a href='officer_update_form.php?Ggroup=$row[0]'>ค้นหา</a></td>";
	echo '					<td class="text-right" width="10%">รายการขยะ:</td>';
	echo '						<td class="text-left"><select name="Gname">';
	echo '							<option value="พลาสติกกรอบ	">พลาสติกกรอบ	</option>';
	echo '							<option value="พลาสติกรวม">พลาสติกรวม</option>';
	echo '							<option value="พลาสติกใส(แกะ)">พลาสติกใส(แกะ)</option>';
	echo '							<option value="กระดาษขาวดำ">กระดาษขาวดำ</option>';
	echo '							<option value="กระดาษสี">กระดาษสี</option>';
	echo '						</select>';
	echo '					</td>';
	echo '				</tr>';
	echo '				<tr>';
	echo '					<td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td>';
	echo '				</tr>';
	echo '				<tr>';
	echo '					<td class="text-right" width="10%" height="50">ราคา: </td>';
	echo '					<td class="text-left" width="10%"><input type="text" name="Tpirce">/โล</td>';
	echo '					<td class="text-right" width="10%" height="50">จำนวน: </td>';
	echo '					<td class="text-left" width="20%"><input type="text" name="Tamount">กิโลกรัม</td>';
	echo '					<td class="text-left" width="5%"><input type="submit" value="คำนวณ"></td>';
	echo '					<td class="text-right" width="5%" height="50">ราคารวม: </td>';
	echo '				<td class="text-left" width="15%"><input type="text" name="Ttotal">บาท</td>';
	echo '				</tr>';
	echo '			</tbody>';
	echo '		</table><br>';
	echo '		<input type="reset" value="ล้าง">';
	echo '		<input type="submit" value="บันทึก">';
	echo '	</form>';
?>
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
