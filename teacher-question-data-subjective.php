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
	
	
	<link rel="stylesheet" href="css/teacher-question-data-subjective.css?v=<?php echo time(); ?>">
</head>

<body>

<div class="inner-body">
	<h1>Add Question Data</h1>



    <div class="tab">
    


										
                                        <form action="#" method="post" class=" formm">
                                        <a class="btn3" id="myBtn">Add New Question</a>
                                        <table class="table-striped table center m-gray" style="margin:0 auto;" cellpadding="10px">
                                        
                                        <tbody><tr class="white">
                                        
                                        
                                        
                                        <td><b>Question</b></td>
                                        <td><b>Action</b></td>
                                        
                                        
                                        </tr>
                                        
                                        <tr class="trr">
                                       
                                        <td><textarea name="Question" id="textarea" cols="80" rows="5" placeholder="Question"></textarea></td>

                                        <td class="tdd">
                                            
                                        <button type="button" class="btn"><span class="material-symbols-sharp">delete</span></button>
                                        <button type="button" class="btn"><span class="material-symbols-sharp">edit</span></button>
                                        <img src="img/pdf.jpg" alt="File" style="margin-top: 1rem; border-radius: 50%; margin-left:1rem;">
                                    </td>

                                    </tr>
                                    <tr class="white">
                                        
                                        
                                        
                                        <td><b>Answer</b></td>
                                        <td></td>
                                        
                                        
                                        </tr>

                                    <tr class="trr">
                                       
                                        <td><textarea name="Answer" id="textarea" cols="80" rows="5" placeholder="Answer" readonly></textarea></td>

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
    
    <textarea name="Question" id="textarea" cols="80" rows="5" placeholder="Question"></textarea>

    <textarea name="answer" id="textarea" cols="80" rows="5" placeholder="Answer" readonly></textarea>

    

  <button class="btn6"><input type="file" name="file" id="file"></button>
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