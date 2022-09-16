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
	
	
	<link rel="stylesheet" href="css/add-employee.css">
</head>
<body>


<div class="inner-body">
      
   <h5>Employee Form</h5>

    <div class="add-students">
      
      
      <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Employee Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Name Of Employee" required>
                        </div>

                        <div class="input-field">
                            <label>Joining Date</label>
                            <input type="date" placeholder="Joining Date" required>
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
                            <label>Employee Type</label>
                            <select required>
                                <option  selected>Employee Type </option>
                                <option>Teacher</option>
                                <option>Coordinator</option>
                                <option>Accountant</option>
                                
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>Monthly Salary</label>
                            <input type="number" placeholder="Monthly Salary" required>
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Other Information</span>

                    <div class="fields">
                    <div class="input-field">
                            <label>Father Name</label>
                            <input type="number" placeholder="Father Name" required>
                        </div>
                    
                    
                    <div class="input-field">
                            <label>CNIC</label>
                            <input type="number" placeholder="CNIC XXXXX-XXXXXXX-X" required>
                        </div>

                        <div class="input-field">
                            <label>Select Religion</label>
                            <select required>
                                <option disabled selected>Religion</option>
                                <option>Islam</option>
                                <option>Christianity</option>
                                <option>Hinduisam</option>
                                
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Education</label>
                            <input type="text" placeholder="Education" required>
                        </div>

                        <div class="input-field">
                            <label>Experience</label>
                            <input type="text" placeholder="Experience/Specialization" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Address" required>
                        </div>
                        <div class="input-field">
                            <label>Date Of Birth</label>
                            <input type="date" placeholder="Date Of Birth" required>
                        </div>
                        <div class="input-field">
                            <label>Picture</label>
                            <input type="file" placeholder="Picture" required style="border: none">
                        </div>
                        

                        
                    </div>

                    
                </div>
                
                <div class="details ID">
                    

                    <button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
                
            
            
            
</div>       
    </form>
  
    </div>

    </div>

<script>
    function search(){
        document.querySelector('.b2')
    }
</script>
</body>
</html>