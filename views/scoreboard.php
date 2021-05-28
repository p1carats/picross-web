<?php require "../app/scoreboard.php" ?>
<div id="scoreboard">
  <h1>Anisen Crossing</h1>
  <h2 class="titreAC">Scoreboard (10x10)</h2>
  <table id="score">
    <tr>
			<th>Username</th>
			<th>Time <br>(seconds)</th>
		</tr>
    <?php foreach($data as $datarow) {
			echo "<tr>";
			echo "<td>"$datarow["nom"]"</td>";
			echo "<td>"$datarow["nom"]"</td>";
			echo "</tr>";
    } ?>
	</table>
</div>