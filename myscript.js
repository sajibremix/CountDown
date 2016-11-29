$(document).ready(function() {
      $( "#form" ).submit(function() {timeCalFunction(); return false;});
      document.getElementById('day').innerHTML = "00";
        document.getElementById('hour').innerHTML = "00";
        document.getElementById('minute').innerHTML = "00";
        document.getElementById('second').innerHTML = "00";

        $("#fontsize").keyup(function(){

            $('#TimeSection').css('font-size', $(this).val() + 'px');
        });

        document.getElementById('bgfilename').addEventListener('change', readURL, true);
});




var upgradeTime;
var interval;
function timeCalFunction(){
	var days = document.getElementById("days").value;
    if(days.length==0){
        days = "0";
    }
	var hours = document.getElementById("hours").value;
    if(hours.length==0){
        hours = "0";
    }
	var minutes = document.getElementById("minutes").value;
    if(minutes.length==0){
        minutes = "0";
    }
	var seconds = document.getElementById("seconds").value;
    if(seconds.length==0){
        seconds = "0";
    }
	upgradeTime = parseInt(days)*24*60*60+parseInt(hours)*60*60+parseInt(minutes)*60+parseInt(seconds);
	clearInterval(interval);
	interval = setInterval(function(){timer()}, 1000);
}

function timer() {
	var days        = Math.floor(upgradeTime/24/60/60);
    var hoursLeft   = Math.floor((upgradeTime) - (days*86400));
    var hours       = Math.floor(hoursLeft/3600);
    var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
    var minutes     = Math.floor(minutesLeft/60);
    var remainingSeconds = upgradeTime % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    if (days < 10) {
        days = "0" + days; 
    }
    if (hours < 10) {
        hours = "0" + hours; 
    }
    if (minutes < 10) {
        minutes = "0" + minutes; 
    }
    //document.getElementById('countdown').innerHTML = days + ":" + hours + ":" + minutes + ":" + remainingSeconds;
    document.getElementById('day').innerHTML = days;
    document.getElementById('hour').innerHTML = hours;
    document.getElementById('minute').innerHTML = minutes;
    document.getElementById('second').innerHTML = remainingSeconds;
    document.getElementById('timeleft').innerHTML = "Time Left";
    if (upgradeTime <= 0) {
        clearInterval(interval);
        document.getElementById('timeleft').innerHTML = "Completed";
    } else {
        upgradeTime--;
    }
    
}

function LabelFontSize(selectTag) {
    var listValue = selectTag.options[selectTag.selectedIndex].text;
    document.getElementById("day").style.fontSize = listValue;
    document.getElementById("hour").style.fontSize = listValue;
    document.getElementById("minute").style.fontSize = listValue;
    document.getElementById("second").style.fontSize = listValue;
}




function readURL(){
    var file = document.getElementById("bgfilename").files[0];
    var reader = new FileReader();
    reader.onloadend = function(){
        document.getElementById('TimeSection').style.backgroundImage = "url(" + reader.result + ")";        
    }
    if(file){
        reader.readAsDataURL(file);
    }else{
    }
}
