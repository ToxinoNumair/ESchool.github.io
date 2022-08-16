<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
<title>E-School</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
	
	
	<link rel="stylesheet" href="admin-dashboard.css">
</head>

<body>
	<div class="container">
		<aside>
		<div class="top">
			
		<div class="logo">
		
			<img src="logo.png">
			
		</div>
			
			<div class="close" id="close-btn">
			<span class="material-symbols-sharp">
				close
            </span>
			</div>
			
			
		</div>
			
			<div class="sidebar">
			<a href=#>
				<span class="material-symbols-sharp">grid_view</span>
					<h3>Dashboard</h3>
					</a>

					<div class="dropdown">
				<a>
				<span class="material-symbols-sharp">manage_accounts</span>
				<h3>Setting</h3></a>
				<div class="dropdowncontent">
				<a href="#">Profile</a>
        <a href="#">Fee Particular</a>
        <a href="#">Details For Fee Challan</a>
        <a href="#">Grading Criteria</a>
				
					</div>
					</div>

					<div class="dropdown">
				<a>
				<span class="material-symbols-sharp">room_preferences</span>
					<h3>Classes</h3></a>
					<div class="dropdowncontent">
				<a href="#">Profile</a>
        <a href="#">Fee Particular</a>
        <a href="#">Details For Fee Challan</a>
        <a href="#">Grading Criteria</a>
				
					</div>

					</div>
				<a>
				<span class="material-symbols-sharp">menu_book</span>
					<h3>Subjects</h3>
					</a>
				<a href=#>
				<span class="material-symbols-sharp">boy</span>
					<h3>Students</h3>
					</a>
				<a href=#>
				<span class="material-symbols-sharp">schedule</span>
					<h3>Time Table</h3>
					</a>
				<a href=#>
				<span class="material-symbols-sharp">payments</span>
					<h3>Salary</h3>
					</a>
				<a href=#>
				<span class="material-symbols-sharp">forum</span>
					<h3>Messages</h3>
					<span class="message-count">3</span>
					</a>
				<a href=#>
				<span class="material-symbols-sharp">groups</span>
					<h3>Online Meeting</h3>
					</a>
				<a href=#>
				<span class="material-symbols-sharp">badge</span>
					<h3>Certficate</h3>
					</a>
				<a href=#>
				<span class="material-symbols-sharp">paid</span>
					<h3>Fee</h3>
					</a><a href=#>
				<span class="material-symbols-sharp">logout</span>
					<h3>Logout</h3>
					</a>
            
			</div>
		</aside>
	<!-----------Sidebar End--------->

	<main>
<h1>Dashboard</h1>
<div class="date">
	<input type="date">
</div>
<div class="insights">
	<div class="sales">
	<span class="material-symbols-sharp">
analytics
</span>

		<div class="middle">
			<div class="left">
				<h3>Total Fee</h3>
				<h1>11,50,000PKR</h1>
			</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>65%</p>
				</div>

			</div>
		</div>
		<small class="text-muted">Last 24 Hours</small>
	</div>

	<div class="expenses">
	<span class="material-symbols-sharp">
        bar_chart
             </span>

		<div class="middle">
			<div class="left">
				<h3>Outstanding Fee</h3>
				<h1>5,10,000PKR</h1>
			</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>55%</p>
				</div>

			</div>
		</div>
		<small class="text-muted">1 Month Remaining</small>
	</div>

	<div class="income">
	<span class="material-symbols-sharp">
	stacked_line_chart
</span>

		<div class="middle">
			<div class="left">
				<h3>Total Expenses</h3>
				<h1>80,000PKR</h1>
			</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>25%</p>
				</div>

			</div>
		</div>
		<small class="text-muted">Last 24 Hours</small>
	</div>


	<div class="revenue">
	<span class="material-symbols-sharp">attach_money</span>

		<div class="Revenue">
			<div class="left">
				<h3>Revenue</h3>
				<h1>6,40,000PKR</h1>
			</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>60%</p>
				</div>

			</div>
		</div>
		<small class="text-muted">Last 24 Hours</small>
	</div>

	<div class="students-daily-attendance">
	<span class="material-symbols-sharp">group</span>

		<div class="stud-attendance">
			<div class="left">
				
				<h1>Student's Attendance</h1>
			</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>85%</p>
				</div>

			</div>
		</div>
		<small class="text-muted">Today's Attendance</small>
	</div>

	<div class="teachers-daily-attendance">
	<span class="material-symbols-sharp">groups</span>

		<div class="teacher-attendance">
			<div class="left">
				
				<h1>Teacher's Attendance</h1>
			</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>99%</p>
				</div>

			</div>
		</div>
		<small class="text-muted">Today's Attendance</small>
	</div>
	<div class="total-students">
	<span class="material-symbols-sharp">groups</span>

		<div class="total-student">
			<div class="left">
				
				<h1>Total Students</h1>
			</div>
			<div class="progress">
				
				<div class="number">
					<h1>499</h1>
				</div>

			</div>
		</div>
		<small class="text-muted">Last Updated Today</small>

	</div>
	<div class="total-teachers">
	<span class="material-symbols-sharp">groups</span>

		<div class="total-teacher">
			<div class="left">
				
				<h1>Total Teachers</h1>
			</div>
			<div class="progress">
				
				<div class="number">
					<h1>50</h1>
				</div>

			</div>
		</div>
		<small class="text-muted">Last Updated Today</small>
	</div>

	<div class="total-parents">
	<span class="material-symbols-sharp">groups</span>

		<div class="total-parent">
			<div class="left">
				
				<h1>Total Parents</h1>
			</div>
			<div class="progress">
				
				<div class="number">
					<h1>45</h1>
				</div>

			</div>
		</div>
		<small class="text-muted">Last Updated Today</small>
	</div>

</div>

<div class="recent-orders">
	<h2>Recent Complains</h2>
	<table>
		<thead>
			<tr>
			    <th>ID</th>
				<th>Name</th>
				
				<th>Class</th>
				<th>Issue</th>
			</tr>
		</thead>
		<tbody>
			<tr>
<td>2288</td>
<td>Numair Tahir</td>
<td>10th</td>
<td class="warning">Late Class</td>

			</tr>

			<tr>
<td>2257</td>
<td>Umair Sadiq</td>
<td>9th</td>
<td class="warning">Absent Teacher</td>

			</tr>

			<tr>
<td>2453</td>
<td>Malik Muddasar</td>
<td>8th</td>
<td class="warning">Result</td>

			</tr>
		</tbody>
	</table>
	<a href="#">Show All</a>
</div>
	</main>

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
			
		</div>
	</div>
	</div>

<div class="recent-updates">
	<h2>Recent Updates</h2>
	<div class="updates">
		<div class="update">
			<div class="profile-photo">
				
			</div>
			<div class="message">
				<p><b>Teacher Hassan</b> is absent today</p>
			</div>
		</div>
	
		<div class="update">
			<div class="profile-photo">
				
			</div>
			<div class="message">
				<p><b>Teacher Numair</b> is absent today</p>
			</div>
		</div>
	
	</div>

	
</div>
<div class="sales-analytics">
	<h2>Event Updates</h2>
	
	<div class="item offline">
		
		<div class="right">
			<div class="info">
				<h3>Parent - Teachers Meeting</h3>
				<small class="text-muted">Today</small>
			</div>
			
		</div>
	</div>

	<div class="item customers">
		
		<div class="right">
			<div class="info">
				<h3>Faculty Meeting</h3>
				<small class="text-muted">Tomorrow</small>
			</div>
			
		</div>
	</div>
<div class="item add-product">
	<div>
	<span class="material-symbols-sharp">add</span>
    <h3>Add</h3>	
</div>
</div>
</div>

</div>
</div>
<script src="./theme.js"></script>
</body>
</html>
