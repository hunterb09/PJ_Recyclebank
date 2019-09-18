<?php
	echo $_POST['$GID'];
	//1. เชื่อมต่อ database:
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
	$sql = "SELECT * FROM garbage WHERE GID = '".$_POST['$GID']."' ";
	$result = mysqli_query($link,$sql);
	//สร้างแถบเมนู
	require("navbar_a.html");
?>
<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body align="center">
<h2><u> แก้ไขข้อมูลขยะ  </u></h2><br>

<form name="form1" method="post" action="garbage_update.php">
	<table border='1' align='center' width='500'>
		<tr align='center' bgcolor='#CCCCCC'>
			<td>รหัส </td>
			<td>ประเภทขยะ </td>
			<td>ชื่อขยะ </td>
			<td>ราคา </td>
		</tr>		  
	<?php while($row = mysqli_fetch_array($result)) {?>
		<tr align='center'>
		  <td><input name='id' type='text' id='txtName' value="<?php echo $row["GID"];?>"> </td>
		  <td><input name='type' type='text' id='txtName' value="<?php echo $row["Gtype"];?>"> </td>
		  <td><input name='name' type='text' id='txtName' value="<?php echo $row["Gname"];?>"> </td>
		  <td><input name='pirce' type='text' id='txtName' value="<?php echo $row["Gpirce"];?>"> </td>	
		</tr>
	<?php } ?>
	</table><br>
	<input type="submit" name="Submit" value="บันทึก">
</form>
<br><a href='garbage_show.php'>ย้อนกลับ </a>
</body>
</html>

