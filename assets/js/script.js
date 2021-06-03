/// HEADER
function openNav() {
  document.getElementById("navbar").style.height = "100%";
}
function closeNav() {
  document.getElementById("navbar").style.height = "0%";
}

/// CHRONOMETER
ss=0;
s=00;
m='0'+0;
h='0'+0;
j=0;
window.status = "Chrono " +h + ' : '  + m + ' : ' + s ; 
function Chrono() {
if (m==0) {m='00'}
if(h==0) {h='00'}
if (ss<10){ss='0'+ss;}
if (s<10){s='0'+s;}
 window.status = "Chrono " +h + ' : '  + m + ' : ' + s ; 
document.formu.heure.value =+h + ' : ' + m + ' : ' + s ;
document.formu.seco.value =ss;
s++;
ss++;
if (s==60){s=0;s=0; m++;if(m<10){m='0'+m;}}
if (m==60){m='0'+0;h++;if(h<10){h='0'+h;}}
chrono=window.setTimeout("Chrono();",1000);
}

/// THEMES
function day(){
  document.body.style.backgroundImage= "url('assets/img/header.jpg')";
  document.getElementById("grid").style.color= "black";
  document.getElementById("grid").style.webkitTextStroke = "0px";
}

function night(){
  document.body.style.backgroundImage= "url('assets/img/night.jpg')";
  document.getElementById("grid").style.color= "white";
  document.getElementById("grid").style.webkitTextStroke = "0.5px black";
}

function beach(){
  document.body.style.backgroundImage= "url('assets/img/beach.jpg')";
  document.getElementById("grid").style.color= "black";
  document.getElementById("grid").style.webkitTextStroke = "0px";
}
