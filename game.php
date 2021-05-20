<?php require 'includes /header.php'; ?>
<main>
    <h1>Play Anisen Crossing</h1>
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
</script>
</main>
<?php require 'includes /footer.php'; ?>