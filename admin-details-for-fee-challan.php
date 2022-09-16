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
	
	
	<link rel="stylesheet" href="css/admin-details-for-fee-challan.css">
</head>
<body>
<div class="inner-body">
      
      <div class="update-dp">
          <h5>Update Bank Logo</h5>
          <label for="myfile">Select a file:</label>
          <input type="file" id="myfile" name="myfile"> 
      </div>
  
  
      <div class="bank-info">
          <h5>Bank Profile</h5>
          <img src="img/meezan.svg" alt="Bank"><br>
          <h3>Meezan Bank</h3>
          <h6>Bank Account Number</6>
          <h6>Address</h6>
      </div>
  
  
      <div class="bank-detail">
        <h5>Update Bank Information</h5>
        
          <input type="text" required placeholder="Bank Name"><br>
          
          <input type="text"required placeholder="Address"><br>
  
          <input type="number"required placeholder="Account Number"><br>
  
          <button>Submit</button>
      </div>
  
      </div>
</body>
</html>