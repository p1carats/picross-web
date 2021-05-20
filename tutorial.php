<?php require 'includes /header.php'; ?>
<main>
    <h1>Anisen Crossing</h1>
    <h2 class="titretuto">Tutorial</h2>

    <section class="story">
        <h3>Learn how to play Nonogram!</h3>
        <p>The object of a picross puzzle is to darken all the correct squares in the grid to reveal a hidden image, using the information given by the numbers around the grid.</p>
        <div class="imagetuto">
            <figure>
                <img src="img/picrossPASFINI.png" alt="Picture of a puzzle at the start"></img>
                <figcaption>The beginning of a nonogram</figcaption>
            </figure>
            <figure>
                <img src="img/picrossFINI.png" alt="Picture of a puzzle finished"></img>
                <figcaption>A finished nonogram</figcaption>
            </figure>
        </div> 
        <p>Each number represents a group of black squares. Each group is seperated by at least one blank square. For example, a line with "5 1" means that there's a group of 5 and a single square, seperated by at least one blank square.</p>
        <div class="imagetuto">
            <figure>
                <img src="img/example1.png" alt="One way of solving the line"></img>
                <figcaption>One possibility of solving the line</figcaption>
            </figure>
            <figure>
                <img src="img/example2.png" alt="Another way of solving the same line"></img>
                <figcaption>Another possibility of solving the line</figcaption>
            </figure>
        </div> 
        <p>There should always be one unique solution, and you should never need to take a guess on one square to solve it, as the information on the top and on the left should coincide with each other.</p>
    </section>

    <button class="homeBtton"type="button">
        <a href="index.php">Home</a>
    </button>

    <button class="gameBtton"type="button">
        <a href="game.php">Play the Game!</a>
    </button>
</main>
<?php require 'includes /footer.php'; ?>