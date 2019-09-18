<?php
	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM trade";
	$result = mysqli_query($link,$sql);
	//สร้างแถบเมนู
	require("navbar_a.html");
	echo '<h2><u> ระบบรับซื้อ/แลกเครื่องเขียน  </u></h2><br>';
?>

<html>
	<head>
		<title>Recycle Bank</title>
	</head>
	<body>
		<script>
			function myFunction()
			{
			<?php
			$link = mysqli_connect("localhost", "root");
			mysqli_set_charset($link,'utf8');
			$sql = "use recyclebank";
			$result = mysqli_query($link,$sql);
			$sql = "SELECT * FROM member WHERE MID = '".$_POST['id']."' ";
			$result = mysqli_query($link,$sql);
			
					//หัวข้อตาราง
			echo "<table border='1' align='center' width='900'>";
			echo "<tr>";
			echo "<tr align='center' bgcolor='#CCCCCC'>
					<td>รหัส </td>
					<td>คำนำหน้า </td>
					<td>ชื่อ </td>
					<td>นามสกุล </td>
					<td>ตำแหน่ง </td>
					<td>สาขา </td>
					<td>ชั้นปี </td>
					<td>รหัสนักศึกษา </td>
					<td>วันเดือนปีที่สมัคร </td>
					<td>แก้ไข </td>
					<td>ลบ </td>
				  </tr>";
				  
			session_start();
			while($row = mysqli_fetch_array($result)) {
			  echo "<tr align='center'>";
				  echo "<td>" .$row["MID"] .  "</td> ";
				  echo "<td>" .$row["Mtitle"] .  "</td> ";
				  echo "<td>" .$row["Mname"] .  "</td> ";
				  echo "<td>" .$row["Mlastname"] .  "</td> ";
				  echo "<td>" .$row["Mposition"] .  "</td> ";
				  echo "<td>" .$row["Mbranch"] .  "</td> ";
				  echo "<td>" .$row["Myear"] .  "</td> ";
				  echo "<td>" .$row["MstuID"] .  "</td> ";
				  echo "<td>" .$row["Mdate"] .  "</td> ";
				  
				  $MID = $row["MID"];
				  $_SESSION["MID"] = $row["MID"];

			  echo "</tr>";
			}
			echo "</table>";
			?>
			}
		</script>
		
		
		
		<form method=post action="">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">รหัสสมาชิก: </td>
						<td width="10%"><input type="text" name="id"><input type="submit" value="OK" onclick="myFunction()"></td>
					</tr>
					<tr height="70">
						<td class="text-right" width="10%">ชื่อ: </td>
						<td class="text-center" width="10%">ยอดเงินปัจจุบัน: </td>
					</tr>
				</tbody>
			</table>
		</form>
		
		<form method=post action="garbage_search_id.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากรหัส: </td>
						<td width="10%"><input type="text" name="id"><input type="submit" value="OK"></td>
					</tr>
				</tbody>
			</table>
		</form>

		<a href="#" onclick="MyFunction();" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ฝากขยะ </a>
		<a href="#" onclick="MyFunction();" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ถอน </a><br><br>
		
		<form method=post action="trade_show_member.php">
			<table border="0" width="80%" align="center">
				<tbody>
				
					<tr>

						<td class="text-right" width="10%">รายการ
							<select name="name">
								<option value="พลาสติกกรอบ	">พลาสติกกรอบ	</option>
								<option value="พลาสติกรวม">พลาสติกรวม</option>
								<option value="พลาสติกใส(แกะ)">พลาสติกใส(แกะ)</option>
								<option value="กระดาษขาวดำ">กระดาษขาวดำ</option>
								<option value="กระดาษสี">กระดาษสี</option>
							</select></td>
						<td class="text-center" width="10%">ราคา </td>
					</tr>
					<tr>
						<td class="text-right" width="10%" height="50">จำนวน: </td>
						<td width="10%"><input type="text" name="amount"></td>
					</tr>
				</tbody>
			</table><br>
			<input type="reset" value="Reset">
			<input type="submit" value="บันทึก">
		</form>
	</body>
</html>

<?php

	//หัวข้อตาราง
	echo "<table border='1' align='center' width='700'>";
	echo "<tr>";
	echo "<tr align='center' bgcolor='#CCCCCC'>
			<td>รหัสสมาชิก </td>
			<td>รายการ </td>
			<td>ราคา </td>
			<td>จำนวน </td>
			<td>ราคารวม</td>
			<td>ยอดเงินฝาก </td>
			<td>ยอดเงินถอน </td>
			<td>ยอดคงเหลือ</td>
		  </tr>";
		  
	while($row = mysqli_fetch_array($result)) {
	  echo "<tr>";
		  echo "<td>" .$row["GID"] .  "</td> ";
		  echo "<td>" .$row["Gtype"] .  "</td> ";
		  echo "<td>" .$row["Gname"] .  "</td> ";
		  echo "<td>" .$row["Gpirce"] .  "</td> ";
		  //
		  $GID = $row["GID"];
		  $_SESSION["GID"] = $row["GID"];
		  //แก้ไขข้อมูล
		  //echo "<td><a href='garbage_edit.php?ID=$row[0]'>edit</a></td> ";
		  echo "<td><a href='garbage_edit.php?ID=$_SESSION[GID]'>แก้ไข </a></td>";

		  //ลบข้อมูล
		  echo "<td><a href='garbage_delete.php?ID=$_SESSION[GID]' onclick=\"return confirm('ต้องการที่จะลบผู้ใช้งานหรือไม่ ')\">ลบ</a></td> ";
	  echo "</tr>";
	}
	echo "</table>";
?>
