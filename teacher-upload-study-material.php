<?php include "teacher-nav.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
<title>E-School</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
	
	
	<link rel="stylesheet" href="css/teacher-study-material.css?v=<?php echo time(); ?>">
</head>

<body>

<div class="inner-body">



<div class="message-box">
<span class="material-symbols-sharp">assignment</span><h3>Upload Study Material</h3>
        
        <form class="msg">
        <input type="text" class="assignment-name" placeholder="Title">
        
      
      </form>
      
      <textarea rows="5" cols="50" name="comment" form="usrform" placeholder="Description"> </textarea><br><br>
	  Attach a File<br>
        <label><input type="file"></label>


           <a href="study-material.php"><button class="button" type="submit">Upload</button></a><br><br>
           
  
    </div>


</div>
</body>
</html>