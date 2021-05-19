<?php require 'includes /header.php'; ?>
<main>
    <h1>Jouer à Anisen Crossing</h1>
    <table>
      <tr class="legendC">
        <td class="null"></td>
        <td>6 3</td>
        <td>1 8</td>
        <td>1 1 1 2</td>
        <td>2 3</td>
        <td>5</td>
        <td>7 1</td>
        <td>4 5</td>
        <td>1 1 1 1 1 1 1</td>
        <td>2</td>
        <td>5 3</td>
      </tr>
      <tr>
        <td class="legendL">1 1 1 1</td>
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
        <td class="legendL">3 5</td>
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
        <td class="legendL">2 7</td>
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
        <td class="dot"></td>
      </tr>
      <tr>
        <td class="legendL">1 1 1 2 3</td>
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
      <td class="legendL"></td>
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
      <td class="legendL"></td>
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
      <td class="legendL"></td>
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
      <td class="legendL"></td>
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
      <td class="legendL"></td>
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