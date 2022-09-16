<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
<title>E-School</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	
	<link rel="stylesheet" href="css/student-dashboard.css?v=<?php echo time(); ?>">
</head>

<body>
	
	<div class="container">
		<aside>
		<div class="top">
			
		<div class="logo">
		
			<a href="student-dashboard.php"><img src="img/logo1.png"></a>
			
		</div>
			
			<div class="close" id="close-btn">
			<span class="material-symbols-sharp">
				close
            </span>
			</div>
			
			
		</div>
			
			<div class="sidebar">
			<a href="student-dashboard.php">
				<span class="material-symbols-sharp">grid_view</span>
					<h3>Dashboard</h3>
					</a>

					<div class="dropdown">
				<a href="student-profile-setting.php">
				<span class="material-symbols-sharp">manage_accounts</span>
				<h3>Setting</h3></a>
				
				
					</div>
					

					<div>
				<a href="student-attendance.php">
				<span class="material-symbols-sharp">room_preferences</span>
					<h3>Attendance</h3></a>
					

					</div>
				
				<a href="students-subject.php">
				<span class="material-symbols-sharp">menu_book</span>
					<h3>Subjects</h3></a>
					

					
					
			
				<a href="student-quiz-result.php">
				<span class="material-symbols-sharp">badge</span>
					<h3>Quiz Result</h3></a>
					
			
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

					<div class="dropdown">
				<a href="student-exam-result.php">
				<span class="material-symbols-sharp">payments</span>
					<h3>Exam Result</h3></a>
					
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
				
					
			<div class="dropdown">
				<a href=#>
				<span class="material-symbols-sharp">paid</span>
					<h3>Fee</h3></a>
					<div class="dropdowncontent">
		<a href="student-fee-receipt.php">Fee Slip</a>
		<a href="student-fee-history.php">Fee History</a>
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

<div class="insights">
	<div class="sales">
	<span class="material-symbols-sharp">flight_class</span>

		<div class="middle">
			<div class="left">
				<h3>Today Status</h3>
				<h1>Attendance</h1>
			</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>Present</p>
				</div>

			</div>
		</div>
		<small class="text-muted">Updated Today</small>
	</div>

	<div class="expenses">
	<span class="material-symbols-sharp">
        notifications
             </span>

		<div class="middle">
			<div class="left">
				<h3 style="opacity:0;">None</h3>
				<h1>Notification</h1>
		
			</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number" style="font-size: 1.3rem;">
					<p>5</p>
				</div>

			</div>
		</div>
		<small class="text-muted">Updated 1 Minute Ago</small>
	</div>

	<div class="income">
	<span class="material-symbols-sharp">
	event
</span>

		<div class="middle">
			<div class="left">
				<h3 style="opacity:0;">0</h3>
				<h1>Events</h1>
			</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p class="number" style="font-size: 1.3rem;">6</p>
				</div>

			</div>
		</div>
		<small class="text-muted">Updated Today</small>
	</div>

	
</div>
<br>



	</main>
    

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
<div class="card-body">
                                        <div class="heading-layout1">
                                            <div class="item-title">
                                                <h1>Results</h1>
                                            </div>
                                            
                                        </div>
                                        <div class="table-box-wrap">
                                            <form class="search-form-box">
                                                <div class="row gutters-8">
                                                    <div class="col-lg-4 col-12 form-group">
                                                        <input type="text" placeholder="Search by Exam ..." class="form-control">
                                                    </div>
                                                    <div class="col-lg-3 col-12 form-group">
                                                        <input type="text" placeholder="Search by Subject ..." class="form-control">
                                                    </div>
                                                    <div class="col-lg-3 col-12 form-group">
                                                        <input type="date" placeholder="dd/mm/yyyy" class="form-control">
                                                    </div>
                                                    <div class="col-lg-2 col-12 form-group">
                                                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="table-responsive result-table-box">
                                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><table class="table display data-table text-nowrap dataTable no-footer" id="DataTables_Table_0" role="grid">
                                                    <thead>
                                                        <tr role="row"><th class="sorting_asc" rowspan="1" colspan="1" style="width: 89.75px;" aria-label="ID">
                                                                <div class="form-check">
                                                                   
                                                                    <label class="form-check-label">ID</label>
                                                                </div>
                                                            </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 96.85px;" aria-label="Exam Name: activate to sort column ascending">Exam Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 71.0333px;" aria-label="Subject: activate to sort column ascending">Subject</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 45.0167px;" aria-label="Grade: activate to sort column ascending">Grade</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 81.8333px;" aria-label="Percent: activate to sort column ascending">Percent</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 83.45px;" aria-label="Date: activate to sort column ascending">Date</th>
                                                           
                                                    </thead>
                                                    <tbody>
                                                        
                                                        
                                          
                                                        
                                                    <tr role="row" class="odd">
                                                            <td class="sorting_1">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> 0021</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>A</td>
                                                            <td>9/10</td>
                                                            <td> 05/09/2022</td>
                                                           
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> 0022</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>A</td>
                                                            <td> 9/10</td>
                                                            <td> 05/09/2022</td>
                                                             
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> 0023</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>Chemistry</td>
                                                            <td>A</td>
                                                            <td> 9/10</td>
                                                            <td> 05/09/2022</td>
                                                            
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> 0024</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>A</td>
                                                            <td> 9/10</td>
                                                            <td> 05/09/2022</td>
                                                             
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> 0025</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>Chemistry</td>
                                                            <td>A</td>
                                                            <td> 9/10</td>
                                                            <td> 05/09/2022</td>
                                                             
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> 0025</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>Chemistry</td>
                                                            <td>D</td>
                                                            <td>5/10</td>
                                                            <td> 05/09/2022</td>
                                                             
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> 0025</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>C</td>
                                                            <td>6/10</td>
                                                            <td> 05/09/2022</td>
                                                             
                                                        </tr><tr role="row" class="even">
                                                            <td class="sorting_1">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> 0025</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>B</td>
                                                            <td> 9/10</td>
                                                            <td> 05/09/2022</td>
                                                             
                                                        </tr><tr role="row" class="odd">
                                                            <td class="sorting_1">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> 0025</label>
                                                                </div>
                                                            </td>
                                                            <td>Exam</td>
                                                            <td>English</td>
                                                            <td>A</td>
                                                            <td> 9/10</td>
                                                            <td>05/09/2022</td>
                                                             
                                                        </tr></tbody>
                                                </table><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">Previous</a>

                                                <a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">Next</a></div></div>
                                            </div>
                                        </div>
                                    </div>

                                    
</div>
<div class="col">
                        <div class="card dashboard-card-six">
                            <div class="card-body2">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h1>Notifications</h1><br>
                                    </div>
                                    
                                </div>
                                <div class="notice-box-wrap">
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">05 Sep, 2022</div>
                                        <h6 class="notice-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a></h6>
                                        <div class="entry-meta"> Numair / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">05 Sep, 2022</div>
                                        <h6 class="notice-title"><a href="#" style="font-family: 'Poppins', san-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a></h6>
                                        <div class="entry-meta"> Numair / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">05 Sep, 2022</div>
                                        <h6 class="notice-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a></h6>
                                        <div class="entry-meta"> Numair / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">05 Sep, 2022</div>
                                        <h6 class="notice-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a></h6>
                                        <div class="entry-meta"> Numair / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">05 Sep, 2022</div>
                                        <h6 class="notice-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a></h6>
                                        <div class="entry-meta"> Numair / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">05 Sep, 2022</div>
                                        <h6 class="notice-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a></h6>
                                        <div class="entry-meta"> Numair / <span>5 min ago</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>

<script src="js/student-theme.js"></script>
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
