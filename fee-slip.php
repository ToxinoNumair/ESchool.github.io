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
	
	
	<link rel="stylesheet" href="css/fee-slip.css?v=<?php echo time(); ?>">
</head>

<body>

<div class="inner-body">

    <div class="fee-slip">
      <h5>Fee Slip</h5>
      <form class="tab">
      <h3>Select Month</h3><br>
        <label class="radio-inline">
      <input type="radio" name="optradio" > January
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >Febuary
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">March
    </label><br>
    <label class="radio-inline">
      <input type="radio" name="optradio" >April
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >May
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >June
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >July
    </label><br>
    <label class="radio-inline">
      <input type="radio" name="optradio" >August
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >September
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >October
    </label><br>
    <label class="radio-inline">
      <input type="radio" name="optradio" >November
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >December
    </label>
      </form>

        <input type="number" required placeholder="Student-ID"><br>
        <a href="fee-submitted.php"><button>Search</a></button>
        
    </div>
  </div>


</body>
</html>