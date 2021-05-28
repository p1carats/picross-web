<!-- Getting data of the game back from the database -->
<?php 
  // Preparing the selection
  $req = $bdd->prepare('SELECT LegendC, LegendL, solution FROM grid');
  // Execution
  $req->execute();
  // Recovery of the data
  $data = $req->fetchAll();
  // Separation of the different datas needed
  foreach($data as $datarow) {
    $grid = $datarow['solution'];
  }
?>

<div id="game">
  <!-- Game page, the most important page which contains... the game. -->
  <h1>Play Anisen Crossing</h1>
  <!-- Buttons to change the theme of the page -->
  <button type="button" class="themeBtton" onclick="day()">Day Theme</button>
  <button type="button" class="themeBtton" onclick="night()">Night Theme</button>
  <button type="button" class="themeBtton" onclick="beach()">Beach Theme</button>

  <!-- Chronometer -->
  <form action="" method="post" name="formu" id="formu">
    <p> 
      <input name="heure" type="text" id="heure" value="00 : 00 : 00">
    </p>
  </form>

  <!-- Grid of the game -->
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

  <!-- TO DO -->
  <button class="solveBtton"type="button">
        <a href="?page=scoreboard">Solve for me!</a>
  </button>
</div>

<script>
// Making the chronometer start automatically once the page loads
window.onload = Chrono();

// Selecting all the cells of the grid
const buttons = document.querySelectorAll('td.dot');

// For each click on one of the cells, two functions happen
for(let i = 0; i < buttons.length; i++){
    buttons[i].addEventListener('click', CarreNoir);
    buttons[i].addEventListener('click', TableData);
}

// First function: switch between black and transparent once clicked
function CarreNoir(){
    if (this.style.backgroundColor !== "black" && this.style.backgroundColor !== "#11ffee00" ) {
   this.style.backgroundColor = "black"; 
   // the 2 lines below is crucial for the game to work, but needs to be hidden
   this.innerHTML = "1";
   this.style.color = "transparent";
    }
    else if (this.style.backgroundColor !== "#ccc" && this.style.backgroundColor !== "#11ffee00") {
        this.style.backgroundColor = "#11ffee00";
        // same as the last comment
        this.innerHTML = "0";
        this.style.color = "transparent";
    }
    else {
        this.style.backgroundColor = "#ccc";
        // same as the last comment
        this.innerHTML = "0";
        this.style.color = "transparent";
    }
}

// Second function: checks if the grid is the same as the solution, if so it ends the game.
function TableData() {
  var infoGrid = "";
  var myTab = document.getElementById('grid'); // Selects the whole table

  // loop through each row of the table after the header
  for (i = 1; i < myTab.rows.length; i++) {
    var objCells = myTab.rows.item(i).cells; // get the cells of every row

    // loop through each column of the table after the first column (legend)
    for (var j = 1; j < objCells.length; j++) {
      infoGrid = infoGrid + objCells.item(j).innerHTML; // stores the number of every cell
    }
  }

  // If the information stored is the same as the information from the database (the solution), then the game ends
  if(infoGrid == "<?php echo $grid ?>"){
    alert("Game won!");
    window.clearTimeout(chrono); // the chronometer ends as well
  }
}

/// themes
function day(){
  document.body.style.backgroundImage= "url('assets/img/header.jpg')";
  document.body.style.color= "black";
}

function night(){
  document.body.style.backgroundImage= "url('assets/img/night.jpg')";
  document.body.style.color= "white";
}

function beach(){
  document.body.style.backgroundImage= "url('assets/img/beach.jpg')";
  document.body.style.color= "black";
}
</script>