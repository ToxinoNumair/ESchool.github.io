<?php include "student-nav.php" ?>
<!doctype html>
<html>
<head>
    
<meta charset="utf-8">
	<meta http http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
<title>E-School</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
	
	
	<link rel="stylesheet" href="css/student-profile-setting.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="inner-body">
      
      <div class="update-dp">
          <h5>Update Your Profile Picture</h5>
          <label for="myfile">Select a file:</label>
          <input type="file" id="myfile" name="myfile"> <button>Upload</button>
      </div>
  
      <div class="Updatepassword">
        <h5>Change Password</h5>
          <input type="password" required placeholder="New Password"><br>
          
          <input type="password"required placeholder="Confirm Password"><br>
  
          <button>Submit</button>
      </div>
  
      </div>
</body>
</html>