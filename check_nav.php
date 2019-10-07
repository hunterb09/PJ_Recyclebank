<?php
    if($row['Status'] == "admin")
		{
			require("navbar_a.html");
        }
    else if($row['Status'] == "officer")
		{
			require("navbar_u.html");
		}
	else
		{
			header("location:login.php");
        }
?>