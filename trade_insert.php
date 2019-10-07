<?php
    $OID = $_POST['OID'];
	$Opassword = $_POST['Opassword'];
	$Oname = $_POST['Oname'];
    $Ostatus = $_REQUEST['Ostatus'];
    
    $link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);
    $sql = "SELECT TID, Tdate, MID, GID, SID, Tpirce, Tamount, Ttotal, Tdbalance, Twbalance, Tbalance
    FROM member, garbage, trade
    WHERE  trade.MID = member.MID AND trade.GID = garbage.GID" ;
    	
	$sql = "insert into officer (OID, Opassword, Oname, Ostatus)".
	"values('$OID', '$Opassword', '$Oname', '$Ostatus')";
	$result = mysqli_query($link,$sql);	
    SELECT ID, NAME, AGE, AMOUNT
   FROM officer, garbage
   WHERE  CUSTOMERS.ID = ORDERS.CUSTOMER_ID;
?>