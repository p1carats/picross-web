<div id="settings">
  <!-- Settings, which lets the player choose between some options to generate the grid -->
  <h1>Anisen Crossing</h1>
  <div class="division">
    <section>
      <h2 class="titreAC">Automatic generation (random)</h2>
      <!-- Here the generation will be random, only the size and the difficulty of the grid is needed -->
      <h3>Size of the grid</h3>
      <div class="optnGrille">
        <input type="radio" id="10" name="grille" value="10" checked>
        <label for="10"><img src="assets/img/10x10.png" alt="10x10 Grid"></img>10x10</label>
        <input type="radio" id="15" name="grille" value="15">
        <label for="15"><img src="assets/img/15x15.png" alt="15x15 Grid"></img>15x15</label>
        <input type="radio" id="20" name="grille" value="20">
        <label for="20"><img src="assets/img/20x20.png" alt="20x20 Grid"></img>20x20</label>
      </div>
      <h3>Difficulty</h3>
      <div class="optnGrille1">
        <input type="radio" id="easy" name="difficulty" value="easy" checked>
        <label for="easy"><i class="far fa-grin"></i>easy</label>
        <input type="radio" id="medium" name="difficulty" value="medium">
        <label for="medium"><i class="far fa-meh"></i>medium</label>
        <input type="radio" id="hard" name="difficulty" value="hard">
        <label for="hard"><i class="far fa-angry"></i>hard</label>
      </div>
      <!-- Button to start the generator program (TO DO) -->
      <button class="gameBtton"type="button">
        <a href="?page=game">Go!</a>
      </button>
    </section>

    <section>
      <h2 class="titreAC">Generate by picture</h2>
      <!-- Here the generation is made with a picture submitted, only this and the size of the grid is needed -->
      <h3>Image selection</h3>
      <div class="optnGrille2">
        <label for="UpImg">Upload an image!</label>
        <input type="file" id="UpImg" name="UpImg" accept="image/*">
      </div>
      <h3>Size of the grid</h3>
      <div class="optnGrille">
        <input type="radio" id="10" name="grille" value="10" checked>
        <label for="10"><img src="assets/img/10x10.png" alt="10x10 Grid"></img>10x10</label>
        <input type="radio" id="15" name="grille" value="15">
        <label for="15"><img src="assets/img/15x15.png" alt="15x15 Grid"></img>15x15</label>
        <input type="radio" id="20" name="grille" value="20">
        <label for="20"><img src="assets/img/20x20.png" alt="20x20 Grid"></img>20x20</label>
      </div>
      <!-- Button to start the generator program (TO DO) -->
      <button class="gameBtton"type="button">
        <a href="?page=game">Go!</a>
      </button>
    </section>
  </div>

  <!-- php to send the program file to the database in order to use it right after -->
  <?php
  $path = __DIR__.'/picross.txt';
  $query = "LOAD DATA LOCAL INFILE '$path' INTO TABLE grid FIELDS TERMINATED BY '\n'";
  ?>
</div>