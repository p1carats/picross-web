<div id="settings">
<?php
  $query = $bdd->prepare("DELETE FROM grid");
  $query->execute();
  ?>  
<!-- Settings, which lets the player choose between some options to generate the grid -->
  <h1>Anisen Crossing</h1>
  <div class="division">
    <section>
      <h2 class="titreAC">Automatic generation (random)</h2>
      <!-- Here the generation will be random, only the size and the difficulty of the grid is needed -->
      <h3>Size of the grid</h3>
      <form class="optnGrille">
        <input type="radio" id="5" name="grille" value="5" checked>
        <label class="grille" for="5"><img src="assets/img/5x5.png" alt="5x5 Grid"></img>5x5</label>
        <input type="radio" id="10" name="grille" value="10">
        <label class="grille" for="10"><img src="assets/img/10x10.png" alt="10x10 Grid"></img>10x10</label>
        <input type="radio" id="15" name="grille" value="15">
        <label class="grille" for="15"><img src="assets/img/15x15.png" alt="15x15 Grid"></img>15x15</label>
      </form>
      
      <!-- Button to start the generator program (TO DO) -->
      <button class="gameBtton"type="button">
        <a href="?page=game">Go!</a>
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
      <form class="optnGrille1">
        <input type="radio" id="5" name="grille" value="5" checked>
        <label class="grille" for="5"><img src="assets/img/5x5.png" alt="5x5 Grid"></img>5x5</label>
        <input type="radio" id="10" name="grille" value="10">
        <label class="grille" for="10"><img src="assets/img/10x10.png" alt="10x10 Grid"></img>10x10</label>
        <input type="radio" id="15" name="grille" value="15">
        <label class="grille" for="15"><img src="assets/img/15x15.png" alt="15x15 Grid"></img>15x15</label>
        </form>
      <!-- Button to start the generator program (TO DO) -->
      <button class="gameBtton"type="button">
        <a href="?page=game">Go!</a>
      </button>
    </section>
  </div>
</div>