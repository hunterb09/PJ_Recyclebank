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
    <script language="javascript">
            function fncAlert()
            {
                alert('Hello ThaiCreate.Com');
            }
			function myFunction()
			{
				<?php
                    echo sdf;
					//1. เชื่อมต่อ database:
					$link = mysqli_connect("localhost", "root");
					mysqli_set_charset($link,'utf8');
					$sql = "use recyclebank";
					$result = mysqli_query($link,$sql);
					$sql = "SELECT * FROM member WHERE MID = '".$_POST['id']."' ";
					$result = mysqli_query($link,$sql);

					$row = mysqli_fetch_array($result);
					

					echo "<tr>";
						echo "<td>" .$row["MID"] .  "</td> ";
						echo "<td>" .$row["Mname"] .  "</td> ";
						echo "<td>" .$row["Mdate"] .  "</td> ";
						echo "<td>" .$row["Mposition"] .  "</td> ";
						echo "<td>" .$row["Mbranch"] .  "</td> ";
						echo "<td>" .$row["MstuID"] .  "</td> ";
						echo "<td>" .$row["Myear"] .  "</td> ";
						echo "<td>" .$row["MphoneN"] .  "</td> ";
						echo "<td>" .$row["Memail"] .  "</td> ";
						echo "<td>" .$row["Mbalance"] .  "</td> ";
					echo "</tr>";
				?>
			}
        </script>
		<h2><u> ค้นหาสมาชิก  </u></h2><br>
		<form method=post>
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากรหัส: </td>
						<td width="10%"><input type="text" name="id"><input type="submit" value="ค้นหา" onclick="JavaScript:myFunction();"></td>
					</tr>
				</tbody>
			</table>
		</form>
		
		<form method=post action="garbage_search_name.php">
			<table border="0" width="80%" align="center">
				<tbody>
					<tr>
						<td class="text-right" width="10%">จากชื่อ: </td>
						<td width="10%"><input type="text" name="name"><input type="submit" value="ค้นหา"> </td>
					</tr>
				</tbody>
			</table>
		</form>
		
		<br><a href='member_show.php'>ย้อนกลับ </a>
		
	</body>
</html>
