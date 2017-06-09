var timeAndDate = new Date();
var dateNode = document.getElementById('date');
var timeNode = document.getElementById('time');


function setDate(){
  dateNode.innerHTML ="DATE\n" + timeAndDate.getDate() + "-" + timeAndDate.getMonth() + "-" + timeAndDate.getFullYear();
}
function startTheClock(){
var timeAndDate = new Date();
var h = timeAndDate.getHours();
var m = timeAndDate.getMinutes();
var s = timeAndDate.getSeconds();
(s<10) ? s = "0" + s:s;
(m<10) ? m = "0" + m:m;
(h<10) ? h = "0" + h:h;
timeNode.innerHTML = "TIME\n" + h + ":" + m + ":" + s;
setTimeout(startTheClock,1000);
}

setDate();
startTheClock();
