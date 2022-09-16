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
	
	
	<link rel="stylesheet" href="css/student-msg.css?v=<?php echo time(); ?>">
</head>
<body>
  
<div class="inner-body">

    <div class="message-box">
        <span class="material-symbols-sharp">
forum
</span><h3>Compose a New Message</h3>
        
        <form class="msg">
            <label>Send Message To</label>
            <select name="msg" id="msg">
              
              <option value="Teacher">Specific Teacher</option>

              
            </select>
			<select name="msg" id="msg">
              <option value="All Students">Class</option>
              <option value="All Teachers">5th A</option>
              
            </select>
            <input type="search" class="search" placeholder="Specific Teacher">
           
      </form>
      
      <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Write Your Message">
        </textarea><br>Attach a File<br>
        <label><input type="file"></label>


            <button class="button" type="submit">Send Message</button>
  
    </div>
	

    </div>
	<div class="insights">

	

		<div class="middle">
			<div class="left">
				<h3>To: Class</h3>
				
			</div>
				<div class="msg2">
					<p>No Class Today</p>
				</div>
				
				<div class="number">
				<span class="material-symbols-sharp">done_all</span>
					<p>2 Minutes Ago</p>
				</div>

		</div>

		

		
		
		<div class="middle">
			<div class="left">
				<h3>To: Teacher</h3>
				
			</div>
				<div class="msg2">
					<p>Ok Sir</p>
				</div>
				
				<div class="number">
				<span class="material-symbols-sharp">done_all</span>
					<p>Just Now</p>
				</div>

		</div>

		

		<div class="middle">
			<div class="left">
				<h3>To: Class</h3>
				
			</div>
				<div class="msg2">
					<p>Where is Numair?</p>
				</div>
				
				<div class="number">
				<span class="material-symbols-sharp">done_all</span>
					<p>Just Now</p>
				</div>

		</div>
	
</div>

</body>
</html>