<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
<title>E-School</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
	
	
	<link rel="stylesheet" href="css/Teacher-nav.css?v=<?php echo time(); ?>">
</head>

<body>
	
<div class="container">
<aside>
		<div class="top">
			
		<div class="logo">
		
			<a href="Teacher-dashboard.php"><img src="img/logo1.png"></a>
			
		</div>
			
			<div class="close" id="close-btn">
			<span class="material-symbols-sharp">
				close
            </span>
			</div>
			
			
		</div>
			
			<div class="sidebar">
			<a href="Teacher-dashboard.php">
				<span class="material-symbols-sharp">grid_view</span>
					<h3>Dashboard</h3>
					</a>

					<div class="dropdown">
				<a href="Teacher-profile.php">
				<span class="material-symbols-sharp">manage_accounts</span>
				<h3>Setting</h3></a>
				
				
					</div>
					

					<div class="dropdown">
				<a href="#">
				<span class="material-symbols-sharp">room_preferences</span>
					<h3>Attendance</h3></a>
                    <div class="dropdowncontent">
					<a href="Teacher-Mark-Attendance.php">Mark Attendance</a>
                    <a href="Teacher-view-attendance.php">View Attendance</a>
                    </div>
                    </div>
					
				
				<a href="Teacher-subjects.php">
				<span class="material-symbols-sharp">menu_book</span>
					<h3>Subjects</h3></a>


					<a href="teacher-upload-assignment.php">
				<span class="material-symbols-sharp">menu_book</span>
					<h3>Assignments</h3></a>

					
					
			
				<a href="#">
				<span class="material-symbols-sharp">badge</span>
					<h3>Quiz Result</h3></a>


                    <a href="teacher-exam-subject-list.php">
				<span class="material-symbols-sharp">paid</span>
					<h3>Exam</h3></a>
					
			
				<a href="student-timetable.php">
				<span class="material-symbols-sharp">schedule</span>
					<h3>Time Table</h3>
					</a>


					<div class="dropdown">
                    <a href="#">
					<span class="material-symbols-sharp">calendar_month</span>
					<h3>Events</h3>
					</a>
                    <div class="dropdowncontent">
					<a href="student-event.php">My Events</a>
                    <a href="#">All Events</a>
                    </div>
                    </div>

					
				
					

					
				<a href="student-msg.php">
				<span class="material-symbols-sharp">forum</span>
					<h3>Messages</h3>
					<span class="message-count">3</span>
					</a>
				<a href="student-online-meeting.php">
				<span class="material-symbols-sharp">groups</span>
					<h3>Online Meeting</h3>
					</a>
				
					
		
					<a href="Login.php">
				<span class="material-symbols-sharp">logout</span>
					<h3>Logout</h3></a>
					
            
			</div>
		</aside>	<!-----------Sidebar End--------->

	

<div class="right">
	<div class="top">
    <div class="notifier new">
    <span class="material-symbols-sharp">
notifications
</span>
    <div class="badge">5</div>
  </div>


  <div class="notifier green">
  <span class="material-symbols-sharp">
chat
</span>
    <span class="badge">5</span>
  </div>
		<button id="menu-btn">
		<span class="material-symbols-sharp">menu</span>
		</button>
		
		<div class="theme-toggler">
		<span class="material-symbols-sharp">light_mode</span>

		<span class="material-symbols-sharp">dark_mode</span>
		</div>

	<div class="profile">
		<div class="info">
			<b>Numair Tahir</b>
		</div>
		<div class="profile-photo">
			<img src="img/Nk.jpg" alt="nk" title="Numair">
		</div>
	</div>
	</div>

<script src="js/head-nav.js"></script>
</body>
</html>
