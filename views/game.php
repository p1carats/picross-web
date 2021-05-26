<div id="game">
  <h1>Play Anisen Crossing</h1>
  <button type="button" class="themeBtton" onclick="day()">Day Theme</button>
  <button type="button" class="themeBtton" onclick="night()">Night Theme</button>
  <button type="button" class="themeBtton" onclick="beach()">Beach Theme</button>
  <form action="" method="post" name="formu" id="formu">
    <p> 
      <input name="heure" type="text" id="heure" value="00 : 00 : 00">
    </p>
  </form>
  <table>
    <tr class="legendC">
      <td class="null"></td>
      <td><div class="box">3</div><div class="box">2</div><div class="box"></div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">1</div><div class="box">2</div><div class="box">1</div><div class="box">1</div><div class="box"></div></td>
      <td><div class="box">1</div><div class="box">2</div><div class="box">1</div><div class="box">2</div><div class="box"></div></td>
      <td><div class="box">1</div><div class="box">2</div><div class="box">4</div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">2</div><div class="box">1</div><div class="box">2</div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">1</div><div class="box">4</div><div class="box"></div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">1</div><div class="box">2</div><div class="box">3</div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">1</div><div class="box">4</div><div class="box">1</div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">2</div><div class="box">3</div><div class="box">3</div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">3</div><div class="box">3</div><div class="box"></div><div class="box"></div><div class="box"></div></td>
    </tr>
    <tr>
      <td class="legendL">3 3</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
    </tr>
    <tr>
      <td class="legendL">1 2</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
    </tr>
    <tr>
      <td class="legendL">5 1</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
    </tr>
    <tr>
      <td class="legendL">10</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
    </tr>
    <tr>
      <td class="legendL">3</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td  class="dot"></td>
    </tr>
    <tr>
      <td class="legendL">1 2</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
    </tr>
    <tr>
      <td class="legendL">8 1</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
    </tr>
    <tr>
      <td class="legendL">1 2 2</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
    </tr>
    <tr>
    <td class="legendL">5 2</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
    </tr>
    <tr>
      <td class="legendL">5 2</td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
      <td class="dot"></td>
    </tr>
  </table>
  <button class="solveBtton"type="button">
        <a href="#">Solve for me!</a>
    </button>
</div>
<script>
  const buttons = document.querySelectorAll('td.dot');

for(let i = 0; i < buttons.length; i++){
    buttons[i].addEventListener('click', CarreNoir);
}

function CarreNoir(){
    if (this.style.backgroundColor !== "black" && this.style.backgroundColor !== "#11ffee00" ) {
   this.style.backgroundColor = "black"; 
    }
    else if (this.style.backgroundColor !== "#ccc" && this.style.backgroundColor !== "#11ffee00") {
        this.style.backgroundColor = "#11ffee00";
    }
    else {
        this.style.backgroundColor = "#ccc";
    }
}

window.onload = Chrono();

/// themes
function day(){
  document.body.style.backgroundImage= "url('assets/img/header.jpg')";
}

function night(){
  document.body.style.backgroundImage= "url('assets/img/night.jpg')";
}

function beach(){
  document.body.style.backgroundImage= "url('assets/img/beach.jpg')";
}
</script>