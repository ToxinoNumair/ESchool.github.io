<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
<title>E-School</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
	
	
	<link rel="stylesheet" href="css/head-nav.css?v=<?php echo time(); ?>">
</head>

<body>
	
	<div class="container">
		<aside>
		<div class="top">
			
		<div class="logo">
		<a href="admin-dashboard.php">
			<img src="img/logo1.png"></a>
			
		</div>
			
			<div class="close" id="close-btn">
			<span class="material-symbols-sharp">
				close
            </span>
			</div>
			
			
		</div>
			
			<div class="sidebar">
			<a href="admin-dashboard.php">
				<span class="material-symbols-sharp">grid_view</span>
					<h3>Dashboard</h3>
					</a>

					<div class="dropdown">
				<a>
				<span class="material-symbols-sharp">manage_accounts</span>
				<h3>Setting</h3></a>
				<div class="dropdowncontent">
				<a href="admin-profile-setting.php">Profile</a>
        <a href="admin-fee-particular.php">Fee Particular</a>
        <a href="admin-details-for-fee-challan.php">Details For Fee Challan</a>
        <a href="#">Grading Criteria</a>
				
					</div>
					</div>

					<div class="dropdown">
				<a>
				<span class="material-symbols-sharp">room_preferences</span>
					<h3>Classes</h3></a>
					<div class="dropdowncontent">
				<a href="All-classes.php">All Classes</a>
        <a href="add-class.php">Add New Classes</a>
        <a href="update-class.php">Update Or Delete Classes</a>

					</div>

					</div>
					<div class="dropdown">
				<a>
				<span class="material-symbols-sharp">menu_book</span>
					<h3>Subjects</h3></a>
					<div class="dropdowncontent">
				<a href="classes-with-subjects.php">Classes With Subjects</a>
        <a href="assign_subjects.php">Assign Subjects</a>
        
					</div>

					</div>
					
					<div class="dropdown">
				<a href=#>
				<span class="material-symbols-sharp">boy</span>
					<h3>Students</h3></a>
					<div class="dropdowncontent">
					<a href="search-students.php">All Students</a>
        <a href="add-student.php">New Admission</a>
		<a href="print-list.php">Print List Of Student</a>
        <a href="promote-students.php">Promote Student</a>
		<a href="existing-data.php">Existing Database?</a>
					
					</div>
			</div>
			<div class="dropdown">
				<a href=#>
				<span class="material-symbols-sharp">badge</span>
					<h3>Employees</h3></a>
					<div class="dropdowncontent">
					<a href="all-employees.php">All Employees</a>
        <a href="add-employee.php">Add New Employee</a>
		
					
					</div>
			</div>
				<a href="admin-timetable.php">
				<span class="material-symbols-sharp">schedule</span>
					<h3>Time Table</h3>
					</a>

					<a href="index.php">
					<span class="material-symbols-sharp">calendar_month</span>
					<h3>Events</h3>
					</a>

					<div class="dropdown">
				<a href=#>
				<span class="material-symbols-sharp">payments</span>
				<h3>Accounts</h3></a>
					<div class="dropdowncontent">
					<a href="account-statement.php">Account Statement</a>
					<a href="add-income.php">Add Income</a>
		<a href="add-expense.php">Add Expense</a>
					</div>
			</div>

					
				<a href="admin-msg.php">
				<span class="material-symbols-sharp">forum</span>
			<h3>Messages</h3>
					<span class="message-count">3</span>
					</a>
				<a href="admin-live.php">
				<span class="material-symbols-sharp">groups</span>
					<h3>Online Meeting</h3>
					</a>
				<a href="certificate.php">
				<span class="material-symbols-sharp">badge</span>
					<h3>Certficate</h3>
					</a>
					
			<div class="dropdown">
				<a href=#>
				<span class="material-symbols-sharp">paid</span>
					<h3>Fee</h3></a>
					<div class="dropdowncontent">
					<a href="admin-generate-challan.php">Generate Bank Challan</a>
        <a href="collect-fee.php">Collect Fee</a>
		<a href="fee-slip.php">Fee Slip</a>
		<a href="defaulters.php">Fee Defaulters</a>
					</div>
			</div>
					<a href="Login.php">
				<span class="material-symbols-sharp">logout</span>
					<h3>Logout</h3>
					</a>
            
			</div>
		</aside>
	<!-----------Sidebar End--------->

	

<div class="right">
	<div class="top">
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
