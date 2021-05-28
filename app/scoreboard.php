<?php 
// Preparing the selection
$req = $bdd->prepare('SELECT nom, temps FROM scoreboard10a ORDER BY temps');
// Execution
$req->execute();
// Recovery of the data
$data = $req->fetchAll(); 