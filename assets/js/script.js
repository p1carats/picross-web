/// navbar
function openNav() {
  document.getElementById("navbar").style.height = "100%";
}
function closeNav() {
  document.getElementById("navbar").style.height = "0%";
}

/// chrono
ss=0;
s=00;
m='0'+0;
h='0'+0;
window.status = "Chrono " +h + ' : '  + m + ' : ' + s ; 
function Chrono() {
if (m==0) {m='00'}
if(h==0) {h='00'}
if (ss<10){ss='0'+ss;}
if (s<10){s='0'+s;}
window.status = "Chrono " +h + ' : '  + m + ' : ' + s ; 
document.formu.heure.value =+h + ' : ' + m + ' : ' + s ;
s++;
ss++;
if (h==24){h='0'+0;}
if (s==60){s=0;s=0; m++;if(m<10){m='0'+m;}}
if (m==60){m='0'+0;h++;if(h<10){h='0'+h;}}
chrono=window.setTimeout("Chrono();",1000);
}
