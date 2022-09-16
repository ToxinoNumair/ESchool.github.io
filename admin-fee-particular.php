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
	
	
	<link rel="stylesheet" href="css/admin-fee-particular.css">
</head>
<body>

<div class="inner-body">
      
    <div class="fee-particular">
        <h5>Change Fee Particulars</h5>

        
        <table>
            <tbody><tr><td class="name">Particular Name</td><td class="amount">Prefix Amount</td></tr><br>
            <tr><td><input type="text" name="p1x" class="form-control" value="MONTHLY TUITION FEE" disabled=""></td>
            <td><input type="text" name="a1x" class="form-control" value="[FIXED]" disabled=""></td></tr>
            <tr><td><input type="text" name="p1" class="form-control" value="ADMISSION FEE" required=""></td>
            <td><input type="number" name="a1" class="form-control" value="0" required=""></td></tr>
            <tr><td><input type="text" name="p2" class="form-control" value="REGISTRATION FEE" required=""></td>
            <td><input type="number" name="a2" class="form-control" value="0" required=""></td></tr>
            <tr><td><input type="text" name="p4" class="form-control" value="TRANSPORT" required=""></td>
            <td><input type="number" name="a4" class="form-control" value="0" required=""></td></tr>
            <tr><td><input type="text" name="p6" class="form-control" value="UNIFORM" required=""></td>
            <td><input type="number" name="a6" class="form-control" value="0" required=""></td></tr>
            <tr><td><input type="text" name="p7" class="form-control" value="FINE" required=""></td>
            <td><input type="number" name="a7" class="form-control" value="0" required=""></td></tr>
            <tr><td><input type="text" name="p2x" class="form-control" value="PREVIOUS BALANCE" disabled=""></td>
            <td><input type="text" name="a2x" class="form-control" value="[FIXED]" disabled=""></td></tr>

            
            </tbody></table><br>
            <button class="button" type="submit"> Save Changes</button>
            
         
    </div>
    </div>
</body>
</html>