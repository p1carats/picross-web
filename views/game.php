<?php 
  $req = $bdd->prepare('SELECT LegendC, LegendL, solution FROM grid');
  // Execution de la requête
  $req->execute();
  // Recuperation du resultat;
  $data = $req->fetchAll();

  foreach($data as $datarow) {
    $grid = $datarow['solution'];
  }
?>

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
  <table id="grid">
    <tr class="legendC">
      <td class="null"></td>
      <td><div class="box">4</div><div class="box">3</div><div class="box"></div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">2</div><div class="box">3</div><div class="box"></div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">3</div><div class="box">1</div><div class="box">3</div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">1</div><div class="box">3</div><div class="box"></div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">2</div><div class="box">3</div><div class="box"></div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">2</div><div class="box">1</div><div class="box">3</div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">3</div><div class="box">1</div><div class="box">2</div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">2</div><div class="box">2</div><div class="box"></div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">2</div><div class="box">2</div><div class="box"></div><div class="box"></div><div class="box"></div></td>
      <td><div class="box">3</div><div class="box"></div><div class="box"></div><div class="box"></div><div class="box"></div></td>
    </tr>
    <tr>
      <td class="legendL">8</td>
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
      <td class="legendL">1 6</td>
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
      <td class="legendL">3 1 1</td>
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
      <td class="legendL">2</td>
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
      <td class="legendL">1</td>
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
      <td class="legendL">1 1</td>
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
      <td class="legendL">2</td>
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
      <td class="legendL">5</td>
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
    <td class="legendL">9</td>
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
      <td class="legendL">9</td>
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
    buttons[i].addEventListener('click', TableData);
}

function CarreNoir(){
    if (this.style.backgroundColor !== "black" && this.style.backgroundColor !== "#11ffee00" ) {
   this.style.backgroundColor = "black"; 
   this.innerHTML = "1";
   this.style.color = "transparent";
    }
    else if (this.style.backgroundColor !== "#ccc" && this.style.backgroundColor !== "#11ffee00") {
        this.style.backgroundColor = "#11ffee00";
        this.innerHTML = "0";
        this.style.color = "transparent";
    }
    else {
        this.style.backgroundColor = "#ccc";
        this.innerHTML = "0";
        this.style.color = "transparent";
    }
}

function TableData() {
  var infoGrid = "";
  var myTab = document.getElementById('grid');

  // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
  for (i = 1; i < myTab.rows.length; i++) {

    // GET THE CELLS COLLECTION OF THE CURRENT ROW.
    var objCells = myTab.rows.item(i).cells;

    // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
    for (var j = 1; j < objCells.length; j++) {
      infoGrid = infoGrid + objCells.item(j).innerHTML;
    }
  }

  if(infoGrid == "<?php echo $grid ?>"){
    alert("Game won!");
    window.clearTimeout(chrono);
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