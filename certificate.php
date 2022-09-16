<?php include "head-nav.php" ?>

<!doctype html>
<html>
<head>
    
<meta charset="utf-8">
	<meta http http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
<title>E-School</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
	
	
	<link rel="stylesheet" href="css/certificate.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="inner-body">

<h3>School Leave Date</h3>
<div class="date">
	<input type="date" required>
</div>
<div class="input">
<input type="number" required placeholder="Student-ID"><br>
<a href="print-certificate.php"><button><span class="material-symbols-sharp" required>
person_search
</span></a></button>
</div>

</div>
</body>
</html>