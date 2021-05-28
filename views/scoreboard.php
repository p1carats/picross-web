<?php // Preparing the selection
    $req = $bdd->prepare('SELECT nom, temps FROM scoreboard10a ORDER BY temps');
    // Execution
    $req->execute();
    // Recovery of the data
    $data = $req->fetchAll(); 
    ?>
<div id="scoreboard">
    <h1>Anisen Crossing</h1>
    <h2 class="titreAC">Scoreboard (10x10)</h2>
    <table id="score">
      		<tr>
			  <th>Username</th>
			  <th>Time <br>(seconds)</th>
			</tr>
<?php foreach($data as $datarow) { ?>
			<tr>
				<td><?php echo $datarow['nom']?></td>
				<td><?php echo $datarow['temps'] ?></td>
			</tr>
<?php } ?>
	</table>
</div>