<?php 
    require "game.php";
    switch($dimension){
    case "10":
        // Preparing the selection
        $req = $bdd->prepare('SELECT nom, temps FROM scoreboard10a ORDER BY temps');
        break;
    case "15":
        // Preparing the selection
        $req = $bdd->prepare('SELECT nom, temps FROM scoreboard15a ORDER BY temps');
        break;
    case "20":
        // Preparing the selection
        $req = $bdd->prepare('SELECT nom, temps FROM scoreboard20a ORDER BY temps');
        break;
    }
// Execution
$req->execute();
// Recovery of the data
$data = $req->fetchAll(); 
?>