<?php
	//session_start();
    if(($_SESSION['Ostatus'] == "admin") || ($_SESSION['Ostatus'] == "officer"))
    {
        if($_SESSION['Ostatus'] == "admin"){
            require("navbar_a.html");
        }
        else{
            require("navbar_u.html");
        }
    }
    else{
        header("location:login.php");
    }
?>