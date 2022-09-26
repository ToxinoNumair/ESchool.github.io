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
	
	
	<link rel="stylesheet" href="css/teacher-exam.css?v=<?php echo time(); ?>">
</head>

<body>

<div class="inner-body">
	<h1>Create Exam</h1>

    <button class="btn3" id="myBtn">Create New Exam</button>

<div class="tab">
										
                                        <form action="#" method="post" class=" formm">
                                        <table class="table-striped table center m-gray" style="margin:0 auto;" cellpadding="10px">
                                        
                                        <tbody><tr class="white">
                                        
                                        <td><b>Exam Name</b></td>
                                        
                                        <td><b>Exam Date & Time</b></td>
                                        <td><b> Total Question</b></td>
                                        <td><b>Correct Answer Marks</b></td>
                                        <td><b>Students</b></td>
                                        <td><b>Options</b></td>
                                        
                                        </tr>
                                        
                                        <tr class="trr">
                                        
                                       <td><b><a href="teacher-Question-data.php"> Final Exam - English (Objective)</a></b></td>
                                        <td><input type="date" readonly> <input type="time" readonly> <b>To</b> <input type="time" class="date" readonly> </td> 
                                        <td><input type="number" value="5" readonly class="numb2">
                                    </td>
                                        <td><input type="number" value="1" readonly class="numb2"></td>
                                        
                                        <td class="td2"><a href="student-enroll.php"><span class="material-symbols-sharp">groups</span></a></td>
                                        
                                        <td class="tdd">
                                            <button type="button" class="btn"><span class="material-symbols-sharp">delete</span></button>
                                        <button type="button" class="btn"><span class="material-symbols-sharp">edit</span></button>
                                    </td>
                                        
                                    
                                    </tr>

                                    <tr class="trr">
                                        
                                        <td><b><a href="teacher-question-data-subjective.php"> Final Exam - English(Subjective)</a></b></td>
                                        <td><input type="date" readonly> <input type="time" readonly><b>To</b> <input type="time" class="date" readonly></td>
                                        <td><input type="number" value="5" readonly class="numb2">
                                    
                                    </td>
                                        <td><input type="number" value="1" readonly class="numb2"></td>
                                        <td class="td2"><a href="student-enroll-subjective.php"><span class="material-symbols-sharp">groups</span></a></td>
                                        
                                        <td class="tdd">
                                            <button type="button" class="btn"><span class="material-symbols-sharp">delete</span></button>
                                        <button type="button" class="btn"><span class="material-symbols-sharp">edit</span></button>
                                    </td>
                                        
                                    
                                    </tr>


                    </tbody></table>

                        </form>
                                        
                                    </div>

                                   

<!-- Trigger/Open The Modal -->


<!-- The Modal -->

<div id="myModal" class="modal">
    

  <!-- Modal content -->
  <div class="modal-content">
  <h1>Add Exam Data</h1>
    
    <div class="message-box">

        
        <form class="msg">
        <label for="total-questions"> Exam Name</label>
        <input type="text" class="assignment-name" placeholder="Exam Name"><br>


        <label for="total-questions"> Exam Type</label>
<select class="SELECT" name="Exam Type" id="questions">
  <option value="Objective">Objective</option>
  <option value="Subjective">Subjective</option>
  
</select>

        
<label for="total-questions">Total Questions</label>
<select class="SELECT" name="total-questions" id="questions">
  <option value="5">5</option>
  <option value="10">10</option>
  <option value="15">15</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>

<label for="correct-questions"> Correct Answer Marks</label>
<select class="SELECT" name="total-questions" id="questions">
  <option value="5">1</option>
  <option value="10">2</option>
  <option value="15">3</option>
  <option value="20">4</option>
  <option value="30">5</option>
  <option value="40">10</option>
</select>

         
<h4>Exam Date</h4>
        <input type="date" class="date"><br>
        <h4>Exam Starting Time</h4>
<input type="time" class="date"><br>
<h4>Exam Ending Time</h4>
<input type="time" class="date">
             
      </form>
      
           <a href="teacher-exam.php"> <button class="button" type="submit">Upload</button></a><br><br>
           
  
    </div>
  </div>

</div>


</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>