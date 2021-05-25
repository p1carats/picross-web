/// navbar
function openNav() {
  document.getElementById("navbar").style.height = "100%";
}
function closeNav() {
  document.getElementById("navbar").style.height = "0%";
}

// game
const buttons = document.querySelectorAll('td.dot');

for(let i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', CarreNoir);
}

function CarreNoir() {
  if (this.style.backgroundColor !== "black" && this.style.backgroundColor !== "#11ffee00" ) {
    this.style.backgroundColor = "black"; 
  } else if (this.style.backgroundColor !== "#ccc" && this.style.backgroundColor !== "#11ffee00") {
    this.style.backgroundColor = "#11ffee00";
  } else {
    this.style.backgroundColor = "#ccc";
  }
}