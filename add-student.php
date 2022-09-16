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
	
	
	<link rel="stylesheet" href="css/add-student.css">
</head>
<body>

<div class="inner-body">
      
   <h5>Admission Form</h5>

    <div class="add-students">
      
      
      <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Student Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter Your Name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter Birth Date" required>
                        </div>

                        <div class="input-field">
                            <label>Registration No</label>
                            <input type="number" placeholder="Registration No" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter Mobile Number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required>
                                <option disabled selected>Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Select Class</label>
                            <select required>
                                <option disabled selected>Select Class</option>
                                <option>6th A</option>
                                <option>7th B</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Other Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Student B-Form</label>
                            <input type="number" placeholder="B-Form XXXXX-XXXXXXX-X" required>
                        </div>

                        <div class="input-field">
                            <label>Select Class</label>
                            <select required>
                                <option disabled selected>Religion</option>
                                <option>Islam</option>
                                <option>Christianity</option>
                                <option>Hinduisam</option>
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Orphan</label>
                            <select required>
                                <option disabled selected>Orphan Student</option>
                                <option>Yes</option>
                                <option>No</option>
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Address" required>
                        </div>

                        
                    </div>

                    
                </div>
                
                <div class="details ID">
                    <span class="title">Father/Mother Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Full Name" required>
                        </div>

                        <div class="input-field">
                            <label>CNIC</label>
                            <input type="number" placeholder="CNIC: XXXXX-XXXXXXX-X" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile No</label>
                            <input type="number" placeholder="Mobile No" required>
                        </div>

                        

                        
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
                
            
            
            
</div>       
    </form>
  
    </div>

    </div>

</body>
</html>