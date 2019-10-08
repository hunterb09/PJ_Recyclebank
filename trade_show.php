<?php
	session_start();
	//เช็คว่าเป็นผู้ใช้งานหรือแอดมินหรือไม่
	require("navbar_officer.php");
	echo '<br><a href="trade_search.php">ย้อนกลับ </a>';
	echo '<h2><u> ระบบรับซื้อขยะ  </u></h2>';
	echo '<h3><u> ฝากถอน  </u></h3><br>';
	echo '<script>';
	echo 'function searchid() {';
					//1. เชื่อมต่อ database:
					$link = mysqli_connect("localhost", "root");
					mysqli_set_charset($link,'utf8');
					$sql = "use recyclebank";
					$result = mysqli_query($link,$sql);
					$sql = "SELECT * FROM member WHERE MID = '".$_POST['id']."' ";
					$result = mysqli_query($link,$sql);
					$row = mysqli_fetch_array($result);

	echo '}';
	echo '</script>';
	
?>
<!doctype html>
<html lang="th">
	<head>
		<meta charset="utf-8">
		<title>Recycle Bank</title>
		<script>
				function myFunction() {
					var Tpirce = document.getElementById("Tpirce").value; 
					var Tamount = document.getElementById("Tamount").value;
					var total = Tpirce * Tamount;
					document.getElementById("Ttotal").value = total;
					//document.getElementById("MID").value = <?php// echo $row["MID"] ?>; 
					//document.getElementById("Mbalance").value = <?php //echo $row["Mbalance"] ?>; 
				}
		</script>
	</head>
	<body>
		<form method=post action="trade_show_member.php">
			<table border="0" width="70%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%" height="30">รหัสสมาชิก:</td>
						 <td class="text-left" width="10%"><input type="text" name="MID" id="MID" value= "<?php echo $row["MID"] ?>"/><a onclick="searchid()">ค้นด้วยรหัส</a></td>
					</tr>
					<tr>	
						<td class="text-right" width="10%" height="30">ชื่อ:</td> 
						<td class="text-left" width="10%"><input type="text" name="Mname" id="Mname" value= "<?php echo $row["Mname"] ?>" /><a onclick="searchid()">ค้นด้วยชื่อ</a></td>
					</tr>
					<tr>
						<td class="text-right" width="10%" height="30">ยอดเงินปัจจุบัน:</td> 
						<td class="text-left" width="10%"><input type="text" name="Mbalance" id="Mbalance" disabled='disabled' value= "<?php echo $row["Mbalance"] ?>" />บาท </td>
					</tr>
					<tr>
						<td><hr></td><td><hr></td>
					</tr>
					<tr>
						<td class="text-right" width="10%" height="30">วันที่: </td>
						<td class="text-left" width="10%"><input type="date" name="Tdate"></td>
					<tr>
						<td class="text-right" width="10%" height="30">กลุ่มขยะ: </td>
						<td class="text-left" width="10%">
							<select name="Ggroup">
								<option value="01/05/2019-30/06/2019">01/05/2019-30/06/2019</option>
								<option value="01/07/2019+">01/07/2019+</option>
							</select>
							<a href='officer_update_form.php?Ggroup=$row[0]'>ค้นหา</a>
						</td>
						</tr>
						<tr>
						<td class="text-right" width="10%" height="30"> รายการขยะ: <input type="hidden" name="GID" value="<?php echo $GID; ?>" /></td>
							<td class="text-left"><select name="Gname"><!--จุดอ่อน ต้องใช้phpดึงชื่อจากฐานข้อมูล Ggroup > Gname -->
								<option value="พลาสติกกรอบ	">พลาสติกกรอบ	</option>
								<option value="พลาสติกรวม">พลาสติกรวม</option>
								<option value="พลาสติกใส(แกะ)">พลาสติกใส(แกะ)</option>
								<option value="กระดาษขาวดำ">กระดาษขาวดำ</option>
								<option value="กระดาษสี">กระดาษสี</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><hr></td><td><hr></td>
					</tr>
					<tr>
						<td class="text-right" width="10%" height="30">ราคา: </td>
						<td class="text-left" width="10%"><input type="text" name="Tpirce" id="Tpirce">/โล</td>
					</tr>
					<tr>
						<td class="text-right" width="10%" height="30">จำนวน: </td>
						<td class="text-left" width="10%"><input type="text" name="Tamount" id="Tamount">กิโลกรัม <a onclick="myFunction()">คำนวณ</a></td>
						
					</tr>
					<tr>
						<td class="text-right" width="10%" height="30">ราคารวม: </td>
						<td class="text-left" width="10%"><input type="text" name="Ttotal" id="Ttotal" ></td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="ล้าง">
			<input type="submit" value="บันทึก">
		</form>
	</body>
</html>
