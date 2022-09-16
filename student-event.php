<?php include "student-nav.php" ?>
<?php include_once('student-functions.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event</title>
<link type="text/css" rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
<script src="js/jquery.min.js"></script>
</head>
<body>

<div id="calendar_div">
	<?php echo get_calender_full(); ?>
</div>
</body>
</html>