<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Countdown Timer</title>
<script src="https://code.jquery.com/jquery-1.10.2.js" ></script>
<script src="myscript.js" ></script>
<link href="mystyle.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<h1>Count Down</h1>
<br>

<div class="container">
<div class="row">
<div id="StyleSection" class="col-md-4">

			<h2 style="font-size: 25px;">Change Your Style</h2>
			<label for="bg">Background:</label> 
			<input id="bg" type="color" onchange="javascript:document.getElementById('TimeSection').style.backgroundColor=document.getElementById('bg').value;"/>or
			<input type='file' id='bgfilename' /><br><br>
			<label for="bg2">Label Color:</label> 
			<input id="bg2" type="color" onchange="javascript:document.getElementById('timecounterdiv').style.color=document.getElementById('bg2').value;
			document.getElementById('day').style.backgroundColor=document.getElementById('bg2').value;
			document.getElementById('hour').style.backgroundColor=document.getElementById('bg2').value;document.getElementById('minute').style.backgroundColor=document.getElementById('bg2').value;document.getElementById('second').style.backgroundColor=document.getElementById('bg2').value;"/><br><br>
			<label for="bg3">Counter Color:</label> 
			<input id="bg3" type="color" value="#ffffff" onchange="javascript:
			document.getElementById('day').style.color=document.getElementById('bg3').value;
			document.getElementById('hour').style.color=document.getElementById('bg3').value;document.getElementById('minute').style.color=document.getElementById('bg3').value;document.getElementById('second').style.color=document.getElementById('bg3').value;"/><br><br>
			Counter Font Size: 
			<select onchange="LabelFontSize(this);">
			  <option>xx-small</option>
			  <option>x-small</option>
			  <option>small</option>
			  <option>medium</option>
			  <option>large</option>
			  <option>x-large</option>
			  <option>xx-large</option>
			  <option>100%</option>
			  <option>250%</option>
			  <option>2cm</option>
			  <option>100px</option>
			</select><br><br>

			Label Font Size: <input type="text" id="fontsize" name="fontsize" placeholder="Size" style="font-size:15px; width: 70px;" onchange="javascript:document.getElementById('StyleSection').style.fontSize=document.getElementById('fontsize').value;">

		</div>

<div id="TimeSection" class="col-md-8">
			<center><p>Enter Your Desire CountDown Timer</p>
			<form id="form">
				<input type="text" id="days" name="days" placeholder="Days" style="font-size:15px; width: 70px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
				<input type="text" id="hours" name="hours" placeholder="Hours" style="font-size:15px; width: 70px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
				<input type="text" id="minutes" name="minutes" placeholder="Minutes" style="font-size:15px; width: 70px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
				<input type="text" id="seconds" name="seconds" placeholder="Seconds" style="font-size:15px; width: 70px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br>
				<input type="submit" name="submit" value="Submit">
			</form>

<br>
			<div id="timecounterdiv">
				<p id="timeleft">Time Left</p>
				<div id="daydiv" class="day">
					<p id="day" class="dayhourminutesecond"></p>
					<br>
					<p>Day</p>
				</div>
				<div id="hourdiv" class="hour">
					<p id="hour" class="dayhourminutesecond"></p>
					<br>
					<p>Hour</p>
				</div>
				<div id="minutediv" class="minute">
					<p id="minute" class="dayhourminutesecond"></p>
					<br>
					<p>Minute</p>
				</div>
				<div id="seconddiv" class="second">
					<p id="second" class="dayhourminutesecond"></p>
					<br>
					<p>Second</p>
				</div>
				
			</div>
		</center>

</div>
</div>
</div>
	

</body>
</html>