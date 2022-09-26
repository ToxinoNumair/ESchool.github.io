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
	
	
	<link rel="stylesheet" href="css/teacher-check-result.css?v=<?php echo time(); ?>">
</head>

<body>

<div class="inner-body">
	<h1>Add Question Data</h1>



    <div class="tab">



										
                                        <form action="#" method="post" class=" formm">
                                        <table class="table-striped table center m-gray" style="margin:0 auto;" cellpadding="10px">
                                        
                                        <tbody><tr class="white">
                                        
                                        <td><b>Question</b></td>
                                        <td><b>Option A</b></td>
                                        <td><b>Option B</b></td>
                                        <td><b>Options C</b></td>
                                        <td><b>Options D</b></td>
                                        <td><b>Student Answer</b></td>
                                        <td><b>Correct Answer</b></td>
                                        <td><b>Result</b></td>
                                        
                                        
                                        </tr>
                                        
                                        <tr class="trr">

                                       <td><b>Capital Of Pakistan Is?</a></b></td>
                                       <td><b>Islamabad</a></b></td>
                                       <td><b>Karachi</a></b></td>
                                       <td><b>Rawalpindi</a></b></td>
                                       <td><b>Kashmir</a></b></td>
                                       <td><b>Islamabad</a></b></td>
                                       <td><b>Islamabad</a></b></td>
                                       <td><b class="result">Right</b></td>
                                        
                                        </tr>

                                        <tr class="trr">

                                       <td><b>Capital Of Pakistan Is?</a></b></td>
                                       <td><b>Islamabad</a></b></td>
                                       <td><b>Karachi</a></b></td>
                                       <td><b>Rawalpindi</a></b></td>
                                       <td><b>Kashmir</a></b></td>
                                       <td><b>Islamabad</a></b></td>
                                       <td><b>Islamabad</a></b></td>
                                       <td><b class="result">Right</b></td>
                                        
                                        </tr>
                                        <tr class="trr">

                                       <td><b>Capital Of Pakistan Is?</a></b></td>
                                       <td><b>Islamabad</a></b></td>
                                       <td><b>Karachi</a></b></td>
                                       <td><b>Rawalpindi</a></b></td>
                                       <td><b>Kashmir</a></b></td>
                                       <td><b>Islamabad</a></b></td>
                                       <td><b>Islamabad</a></b></td>
                                       <td><b class="result">Right</b></td>
                                        
                                        </tr>
                                        <tr class="trr">

                                       <td><b>Capital Of Pakistan Is?</b></td>
                                       <td><b>Islamabad</b></td>
                                       <td><b>Karachi</b></td>
                                       <td><b>Rawalpindi</b></td>
                                       <td><b>Kashmir</b></td>
                                       <td><b>Islamabad</b></td>
                                       <td><b>Islamabad</b></td>
                                       <td><b class="resultwrong">Wrong</b></td>
                                        
                                        </tr>

                                        <tr class="trr">

                                       <td><b></a></b></td>
                                       <td><b></a></b></td>
                                       <td><b></b></td>
                                       <td><b></b></td>
                                       <td><b></b></td>
                                       <td><b></b></td>
                                       <td><b>Total Marks</b></td>
                                       <td><b>3</b></td>
                                        
                                        </tr>
                                        
                                        

                                    


                    </tbody></table>

                        </form>
                                        
                                    </div>

                                   

<!-- Trigger/Open The Modal -->


<!-- The Modal -->

<div id="myModal" class="modal">
    

  <!-- Modal content -->
  <div class="modal-content">
  <h1>Question Data</h1>
    
  <form action="#">
    <label for="Qtitle">Question Title</label>
    <input type="text" id="fname" name="firstname" placeholder="Question Title">

    <label for="oA">Option A</label>
    <input type="text" id="lname" name="lastname" placeholder="Option A">

    <label for="oB">Option B</label>
    <input type="text" id="lname" name="lastname" placeholder="Option B">

    <label for="oC">Option C</label>
    <input type="text" id="lname" name="lastname" placeholder="Option C">

    <label for="oD">Option D</label>
    <input type="text" id="lname" name="lastname" placeholder="Option D">

    <label for="country">Correct Answer</label>
    <select id="country" name="country">
      <option value="optionA">Option A</option>
      <option value="optionB">Option B</option>
      <option value="optionC">Option C</option>
      <option value="optionD">Option D</option>
    </select>
  
    <input type="submit" value="Upload">
  </form>
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