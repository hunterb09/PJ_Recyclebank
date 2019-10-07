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
	<a href="trade_search.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">รับซื้อ</a>
	<a href="sell_show.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ขายขยะ</a>
</body>
</html>