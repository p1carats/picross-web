<?php require "./app/game.php" ?>
<div id="game">
  <!-- Game page, the most important page which contains... the game. -->
  <!-- Buttons to change the theme of the page -->
  <button type="button" class="themeBtton1" onclick="day()">Day Theme</button>
  <button type="button" class="themeBtton2" onclick="night()">Night Theme</button>
  <button type="button" class="themeBtton3" onclick="beach()">Beach Theme</button>
  <h1>Play Anisen Crossing</h1>
  
  <!-- Chronometer -->
  <form action="" method="post" name="formu" id="formu">
    <p> 
    <input name="heure" type="text" id="heure" value="00 : 00 : 00"><input name="seco" type="text" id="secondes" value="00">
    </p>
  </form>

  <!-- Grid of the game -->
  <table id="grid">
    <tr class="legendC">
      <td class="null"></td>
      <?php 
      for($i=0; $i<count($legendsC);$i++){
        echo '<td>';
        $indices = explode(",", $legendsC[$i]);
        for($j=0;$j<count($indices);$j++){
          echo '<div class="box">'.$indices[$j].'</div>';
        }
        echo '</td>';
      } ?>
    </tr>
      <?php 
        for($i=0; $i<count($legendsL);$i++){
          $indices = explode(",", $legendsL[$i]);
          echo '<tr>';
          echo '<td class="legendL">';
          for($j=0;$j<count($indices);$j++){
            echo $indices[$j];
            echo ' ';
          }
          echo '</td>';
          for($k=0;$k<$dimension;$k++){
            echo '<td class="dot">0</td>';
          }
          echo '</tr>';
        }
      ?>
  </table>
  <p id="hiddentemps"></p>
  <!-- soon
  <button class="solveBtton"type="button">
        <a href="#">Solve for me!</a>
  </button> -->
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
    <?php require "./app/scoreboard.php";
    /* To do here: récuperer la valeur temps dans l'input, récupérer les valeurs temps de la base de données et comparer. */
    ?>
    var nom = prompt("Please enter your name! (if you don't, your score won't be saved)", "");
    if (nom != null || nom != "") {
      var text="this is a debug text";
    }
    window.location.href='?page=scoreboard';
  }
}

/// themes
function day(){
  document.body.style.backgroundImage= "url('assets/img/header.jpg')";
  document.body.style.color= "black";
  document.body.style.webkitTextStroke = "0px";
}

function night(){
  document.body.style.backgroundImage= "url('assets/img/night.jpg')";
  document.body.style.color= "white";
  document.body.style.webkitTextStroke = "0.5px black";
}

function beach(){
  document.body.style.backgroundImage= "url('assets/img/beach.jpg')";
  document.body.style.color= "black";
  document.body.style.webkitTextStroke = "0px";
}
</script>