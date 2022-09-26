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
	
	
	<link rel="stylesheet" href="css/student-exam2.css?v=<?php echo time(); ?>">
</head>

<body>

<div class="inner-body">
	<h1>Exam</h1>

    

<div class="tab">
										
                                        <form action="#" method="post" class=" formm">
                                        <table class="table-striped table center m-gray" style="margin:0 auto;" cellpadding="10px">
                                        
                                        <tbody><tr class="white">
                                        
                                        <td><b>Exam Name</b></td>
                                        
                                        <td><b>Exam Date & Time</b></td>
                                        <td><b> Exam Duration</b></td>
                                        <td><b>Correct Answer Marks</b></td>
                                        <td><b>Status</b></td>
                                        <td><b>Action</b></td>
                                        
                                        </tr>
                                        
                                        <tr class="trr">
                                        
                                       <td><b><a href="teacher-Question-data.php"> Final Exam - English (Objective)</a></b></td>
                                        <td><input type="date" readonly> <input type="time" readonly> </td> 
                                        <td><b>5 Minutes</b></td>
                                        <td><input type="number" value="1" readonly class="numb2"></td>
                                        <td><b class="started">Started</b></td>
                                        
                                        
                                        <td class="tdd">
                                        <button type="button" class="btn"><span class="material-symbols-sharp">edit</span></button>
                                    </td>
                                        
                                    
                                    </tr>


                    </tbody></table>

                        </form>
                                        
                                    </div>

                                   

</body>
</html>