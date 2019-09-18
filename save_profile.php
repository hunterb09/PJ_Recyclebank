<?php
	session_start();
	if($_SESSION['OfficerID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use recyclebank";
	$result = mysqli_query($link,$sql);	

	
	 
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	$sql = "UPDATE member SET Password = '".trim($_POST['txtPassword'])."'
	,Name = '".trim($_POST['txtName'])."' WHERE OfficerID = '".$_SESSION["OfficerID"]."' ";
	$result = mysqli_query($link,$sql);	
	echo "Save Completed!<br>";      
	 
	if($_SESSION["Status"] == "admin")
	{
		echo "<br> Go to <a href='admin_page.php'>Admin page</a>";
	}
	else
	{
		echo "<br> Go to <a href='officer_page.php'>Officer page</a>";
	}
	 
?>