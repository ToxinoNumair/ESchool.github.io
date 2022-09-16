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
	
	
	<link rel="stylesheet" href="css/search-students.css">
</head>
<body>
<div class="inner-body">
      
   

      <div class="search-students">
        <h5>Search Student</h5>
        
          <input type="text" required placeholder="Name"><br>
          
          <input type="text"required placeholder="Class"><br>
  
          <input type="text"required placeholder="Student-ID"><br>
  
          <button>Search</button>
      </div>
      <div class="search-students-result">
         <a href="add-student.html"><img src="img/boy.gif"></a>
          <h4>Numair</h4>
          <h5>5th A</h5>
          <span class="material-symbols-sharp" class="delete" title="Delete">delete</span>
          <span class="material-symbols-sharp" title="Edit">edit</span>
          <a href="admin-student-report.php"> <span class="material-symbols-sharp" title="View">visibility</a></span>
        </div>
        <main>
        <div class="recent-orders">
	
	<table>
		<thead>
			<tr>
			    <th>Student-ID</th>
				<th>Student Name</th>
				
				<th>Father Name</th>
				<th>Class</th>
			</tr>
		</thead>
		<tbody>

			<tr>
<td>2288</td>
<td>Numair Tahir</td>
<td>Tahir Mehmood</td>
<td>10th</td>

			</tr>

			<tr>
<td>2288</td>
<td>Numair Tahir</td>
<td>Tahir Mehmood</td>
<td>10th</td>

			</tr>

			<tr>
<td>2288</td>
<td>Numair Tahir</td>
<td>Tahir Mehmood</td>
<td>10th</td>

			</tr>
		</tbody>
	</table>
</div>
        </main>
  
      </div>
</body>
</html>