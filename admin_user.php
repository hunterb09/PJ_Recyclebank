<?php
	session_start();
	
	
	if($_SESSION['Status'] != "admin")
	{
		header("location:admin_page.php");
		exit();
	}
	if($_SESSION['Status'] != "officer")
	{
		header("location:officer_page.php");
		exit();
	}
?>