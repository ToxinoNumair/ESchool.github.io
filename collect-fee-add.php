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
	
	
	<link rel="stylesheet" href="css/collect-fee-add.css?v=<?php echo time(); ?>">
</head>

<body>

<div class="inner-body">
      
      

    <div class="collect-fee">
        <h5>Fee Collection</h5>


        <table class="table3">
        
		<div class="row text-left p-t-20 ">
											   
											   <div class="col-lg-2">
                                               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Reg. No<br> <input class="m-orange" type="text" name="reg" id="amt1" value="2288" style="border-bottom: none">
											   </div>
											   <div class="col-lg-4">
                                               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName<br> <input class="m-orange" type="text" name="name" id="amnt" value="Numair" style="border-bottom: none">
											   </div>
											   <div class="col-lg-3">
                                               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFather Name<br> <input class="m-orange" type="text" name="fname" id="amnt" value="Tahir" style="border-bottom: none">
											   </div>
											   <div class="col-lg-3">
											  Class<br><span class="m-orange">7th A</span> <input type="text" name="class" id="amt1" style="border-bottom: none">
											   </div>
									</div>
											   
                <div class="in">
                <form class="tab">
      <h2>Select Month</h2><br>
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
    </label><br>
      </form><input type="date" required placeholder="date">
                </div>
            
        <table class="table4">
            <tbody><tr><td class="col-8 m-orange">Particular Name</td><td class="m-orange">Prefix Amount</td></tr><br>
            <tr><td><input type="text" name="p1x" class="form-control" value="MONTHLY TUITION FEE" disabled=""></td>
            <td><input type="text" name="a1x" class="form-control" value="[FIXED]" disabled=""></td></tr>
            <tr><td><input type="text" name="p1" class="form-control" value="ADMISSION FEE" required=""></td>
            <td><input type="number" name="a1" class="form-control" value="0" required=""></td></tr>
            <tr><td><input type="text" name="p2" class="form-control" value="REGISTRATION FEE" required=""></td>
            <td><input type="number" name="a2" class="form-control" value="0" required=""></td></tr>
            <tr><td><input type="text" name="p4" class="form-control" value="TRANSPORT" required=""></td>
            <td><input type="number" name="a4" class="form-control" value="0" required=""></td></tr>
            <tr><td><input type="text" name="p6" class="form-control" value="UNIFORM" required=""></td>
            <td><input type="number" name="a6" class="form-control" value="0" required=""></td></tr>
            <tr><td><input type="text" name="p7" class="form-control" value="FINE" required=""></td>
            <td><input type="number" name="a7" class="form-control" value="0" required=""></td></tr>
                <tr><td><input type="text" name="p2x" class="form-control" value="Discount"></td>
                    <td><input type="text" name="a2x" class="form-control" value="0" ></td></tr>
                    <tr><td><input type="text" name="p2x" class="form-control" value="Total"></td>
                        <td><input type="text" name="a2x" class="form-control" value="0" style="border:none";></td></tr>
                        <tr><td><input type="text" name="p2x" class="form-control" value="Deposit"></td>
                            <td><input type="text" name="a2x" class="form-control" value="0"></td></tr>
                            <tr><td><input type="text" name="p2x" class="form-control" value="Due-able"></td>
                                <td><input type="text" name="a2x" class="form-control" value="0" style="border: none"></td></tr>
                        </tbody></table><br>
        
            
            </tbody></table><br>
            <button class="button" type="submit">Collect</button>
            
         
    </div>

    </div>


</body>
</html>