<?php 
// Delete all preexisting grids from database
$query = $bdd->prepare("DELETE FROM grid");
$query->execute(); 

// Execute game with said dimension
$a = $_COOKIE['taille'];
exec("C:/xampp/htdocs/picross-web-master-01/picross.exe -g $a");

// Send created game to database
$path = "C:/xampp/htdocs/picross-web-master-01/picross.txt";
$query2 = $bdd->prepare("LOAD DATA INFILE '$path' INTO TABLE grid FIELDS TERMINATED BY '\n'");
$query2->execute();

require "./app/game.php";
?>

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
    <input name="seco" type="text" id="secondes" value="00"><input name="heure" type="text" id="heure" value="00 : 00 : 00">
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
  <button class="solveBtton"type="button" onclick="solveGrid()">
        <p>Solve for me!</p>
  </button>
  <button class="gameBtton replay"type="button">
        <a href="?page=game">Generate another game!</a>
    </button>
</div>

<script>
// Making the chronometer start automatically once the page loads
window.onload = Chrono();

var JSGrid = "<?php echo $grid; ?>";
let soluceGrid = '';
for(let i = 0, count = 0; i < JSGrid.length; i++){
  if(count >= <?php echo $dimension; ?>-1){
    count = 0;
    soluceGrid += JSGrid[i];
    soluceGrid += '\n';
  }
  else{
         count++;
         soluceGrid += JSGrid[i];
         soluceGrid += ' ';
  }
}


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
    window.clearTimeout(chrono); // the chronometer ends as well, to get back its value
    if(document.getElementById("secondes").value != 0){
      var temps = document.getElementById("secondes").value; 
      var nom = prompt("Please enter your name! (if you don't, a default username will be registered instead.)", "Xx_D4rKRand0m_xX");
      if(nom == '' || nom == null){
        nom = 'Xx_D4rKRand0m_xX';
      }
      document.cookie = "nom" + "=" + nom; // get cookies of the name and the time to send to the scoreboard when the page loads
      document.cookie = "temps" + "=" + temps;
      window.location.href='?page=scoreboard';
    }
    else{
      alert("You've completed the game while looking at the solution.\nYour score won't be saved.");
    }
  }
}

// Solver function linked to the button
function solveGrid(){
  alert("The solution of the grid is:\n" + soluceGrid);
  window.clearTimeout(chrono);
  s=0;m=0;h=0;ss=0; 
  window.status = '0 : 00 : 00'; 
  document.formu.heure.value ='0 : 00 : 00';
  document.formu.seco.value='0'+0;
}

</script>