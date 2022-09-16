<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
<title>E-School</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
	
	
	<link rel="stylesheet" href="css/admin-dashboard.css?v=<?php echo time(); ?>">
</head>

<body>
	
	<div class="container">
		<aside>
		<div class="top">
			
		<div class="logo">
		
			<a href="admin-dashboard.php"><img src="img/logo1.png"></a>
			
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
				<a href="admin-profile-setting.php">
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
        <a href="sadd-employee.php">Add New Employee</a>
		
					
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
				<a href=certificate.php>
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
					<h3>Logout</h3></a>
					
            
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
					<p>100%</p>
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

</div><br>

<h1 style="text-align: left">Account Statistics</h1>

<canvas id="chart"></canvas>

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
			<img src="Nk.jpg" alt="nk" title="Numair">
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
				<h3>Parent - Teacher Meeting</h3>
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
<h2>Calendar</h2>

<div class="calendar-wrapper">
  <button id="btnPrev" type="button">Prev</button>
	  <button id="btnNext" type="button">Next</button>
  <div id="divCal"></div>
</div>


</div>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/theme.js"></script>
<script>
	var Cal = function(divId) {

//Store div id
this.divId = divId;

// Days of week, starting on Sunday
this.DaysOfWeek = [
  'Sun',
  'Mon',
  'Tue',
  'Wed',
  'Thu',
  'Fri',
  'Sat'
];

// Months, stating on January
this.Months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ];

// Set the current month, year
var d = new Date();

this.currMonth = d.getMonth();
this.currYear = d.getFullYear();
this.currDay = d.getDate();

};

// Goes to next month
Cal.prototype.nextMonth = function() {
if ( this.currMonth == 11 ) {
  this.currMonth = 0;
  this.currYear = this.currYear + 1;
}
else {
  this.currMonth = this.currMonth + 1;
}
this.showcurr();
};

// Goes to previous month
Cal.prototype.previousMonth = function() {
if ( this.currMonth == 0 ) {
  this.currMonth = 11;
  this.currYear = this.currYear - 1;
}
else {
  this.currMonth = this.currMonth - 1;
}
this.showcurr();
};

// Show current month
Cal.prototype.showcurr = function() {
this.showMonth(this.currYear, this.currMonth);
};

// Show month (year, month)
Cal.prototype.showMonth = function(y, m) {

var d = new Date()
// First day of the week in the selected month
, firstDayOfMonth = new Date(y, m, 1).getDay()
// Last day of the selected month
, lastDateOfMonth =  new Date(y, m+1, 0).getDate()
// Last day of the previous month
, lastDayOfLastMonth = m == 0 ? new Date(y-1, 11, 0).getDate() : new Date(y, m, 0).getDate();


var html = '<table>';

// Write selected month and year
html += '<thead><tr>';
html += '<td colspan="7">' + this.Months[m] + ' ' + y + '</td>';
html += '</tr></thead>';


// Write the header of the days of the week
html += '<tr class="days">';
for(var i=0; i < this.DaysOfWeek.length;i++) {
  html += '<td>' + this.DaysOfWeek[i] + '</td>';
}
html += '</tr>';

// Write the days
var i=1;
do {

  var dow = new Date(y, m, i).getDay();

  // If Sunday, start new row
  if ( dow == 0 ) {
	html += '<tr>';
  }
  // If not Sunday but first day of the month
  // it will write the last days from the previous month
  else if ( i == 1 ) {
	html += '<tr>';
	var k = lastDayOfLastMonth - firstDayOfMonth+1;
	for(var j=0; j < firstDayOfMonth; j++) {
	  html += '<td class="not-current">' + k + '</td>';
	  k++;
	}
  }

  // Write the current day in the loop
  var chk = new Date();
  var chkY = chk.getFullYear();
  var chkM = chk.getMonth();
  if (chkY == this.currYear && chkM == this.currMonth && i == this.currDay) {
	html += '<td class="today">' + i + '</td>';
  } else {
	html += '<td class="normal">' + i + '</td>';
  }
  // If Saturday, closes the row
  if ( dow == 6 ) {
	html += '</tr>';
  }
  // If not Saturday, but last day of the selected month
  // it will write the next few days from the next month
  else if ( i == lastDateOfMonth ) {
	var k=1;
	for(dow; dow < 6; dow++) {
	  html += '<td class="not-current">' + k + '</td>';
	  k++;
	}
  }

  i++;
}while(i <= lastDateOfMonth);

// Closes table
html += '</table>';

// Write HTML to the div
document.getElementById(this.divId).innerHTML = html;
};

// On Load of the window
window.onload = function() {

// Start calendar
var c = new Cal("divCal");			
c.showcurr();

// Bind next and previous button clicks
getId('btnNext').onclick = function() {
  c.nextMonth();
};
getId('btnPrev').onclick = function() {
  c.previousMonth();
};
}

// Get element by id
function getId(id) {
return document.getElementById(id);
}
</script>
</body>
</html>
