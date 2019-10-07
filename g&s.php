<?php
	session_start();
	//สร้างแถบเมนู
	require("navbar_officer.php");
	//navbar_officer.php, garbage_show.php, stationary_show.php
?>

<html>
<head>
</head>
<body align="center">
	<h2><u> ขยะ เครื่องเขียน </u></h2><br>
	<a href="garbage_show.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ขยะ</a>
	<a href="stationary_show.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เครื่องเขียน</a>
</body>
</html>