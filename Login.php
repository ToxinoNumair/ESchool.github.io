<!DOCTYPE html>
<html>
<head>
	<title>E-School-Login</title>
	<link rel="stylesheet" type="text/css" href="css/Login.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
		<div class="login-content">
			<form action="admin-dashboard.php">
				<img src="img/logo1.png">
				<h2 class="title">LOGIN</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   	
           		   		<input type="text" class="input" placeholder="User-ID">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="text" class="input" placeholder="Password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="theme.js"></script>
</body>
</html>
