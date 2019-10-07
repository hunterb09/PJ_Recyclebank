<?php 
	//สร้างแถบเมนู
	require("navbar_0.html");
	session_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>เข้าสู่ระบบ RB</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		html, body {
   			height: 100%;
		}
		
		body {
			background-color: azure;
		}
		
		.form-signin {
  			width: 100%;
  			max-width: 430px;
  			padding: 10px;
  			margin: auto;
		}
		
		.form-signin .form-control {
  			position: relative;
  			height: auto;
 			padding: 10px;
  			font-size: 16px;
		}
		
		.form-control:focus {
  			z-index: 2;
		}
		
		#officer {
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
			margin-bottom: -1px
		}
		
		#password {
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}	
	</style>	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script> 
</head>
	
<body class="d-flex align-items-center text-center">
<form class="form-signin" METHOD=POST ACTION="check_officer.php" >
	<img class="mb-4" src="picture/maejo.png" alt="Maejo" width="140" height="140">
	<img class="mb-4" src="picture/bis.png" alt="Bis" width="240" height="180">
	<h1 class="h3 mb-3 font-weight-normal text-center">เข้าสู่ระบบ</h1>

	<input type="text" id="id" name="id" class="form-control" placeholder="ID" required autofocus>   
	<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
	   
	<div class="custom-control custom-checkbox m-3">
		<input type="checkbox" class="custom-control-input" id="check1" value="remember-me" checked>
		<label class="custom-control-label" for="check1">Remember me</label>
 	</div>
	  
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	  
      <p class="mt-5 mb-3 text-center">&copy; 2019</p>
</form>
</body>
</html>