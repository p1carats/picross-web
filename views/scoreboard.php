<?php 
  // Preparing the selection
  $req = $bdd->prepare('SELECT id, nom, temps FROM scoreboard10a ORDER BY temps');
  // Execution
  $req->execute();
  // Recovery of the data
  $data = $req->fetchAll();
?>
<div id="scoreboard">
    <h1>Anisen Crossing</h1>
    <h2 class="titreAC">Scoreboard</h2>
    <table>
		  	<tr>
			  <th>Id</th>
			  <th>Pseudo</th>
			  <th>Temps</th>
			</tr>
<?php foreach($data as $datarow) { ?>
			<tr>
				<td><?php echo $datarow['id'] ?></td>
				<td><?php echo $datarow['nom']?></td>
				<td><?php echo $datarow['temps'] ?></td>
			</tr>
<?php } ?>
	</table>
</div>