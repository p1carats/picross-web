<?php 
// Getting data of the game back from the database
// Preparing the selection
$req = $bdd->prepare('SELECT dimension, legendC, legendL, solution FROM grid');
// Execution
$req->execute();
// Recovery of the data
$data = $req->fetchAll();
// Separation of the different datas needed
foreach($data as $datarow) {
  $dimension = $datarow['dimension'];
  $legendC = $datarow['legendC'];
  $legendL = $datarow['legendL'];
  $grid = $datarow['solution'];
}

$legendsC = explode(";", $legendC);
$legendsL = explode(";", $legendL);
?>