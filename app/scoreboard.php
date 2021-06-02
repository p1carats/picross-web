<?php 
    require "game.php";
    $nom1 = $_COOKIE['nom'];
    $temps1 = $_COOKIE['temps'];
    switch($dimension){
    case "10":
        // Preparing the selection
        $req = $bdd->prepare('SELECT nom, temps FROM scoreboard10a ORDER BY temps');
        $sel = $bdd->prepare("INSERT INTO scoreboard10a (nom, temps) VALUES ('$nom1', '$temps1')");
        break;
    case "15":
        // Preparing the selection
        $req = $bdd->prepare('SELECT nom, temps FROM scoreboard15a ORDER BY temps');
        $sel = $bdd->prepare("INSERT INTO scoreboard15a (nom, temps) VALUES ('$nom1', '$temps1')");
        break;
    case "20":
        // Preparing the selection
        $req = $bdd->prepare('SELECT nom, temps FROM scoreboard20a ORDER BY temps');
        $sel = $bdd->prepare("INSERT INTO scoreboard20a (nom, temps) VALUES ('$nom1', '$temps1')");
        break;
    }
// Execution
$sel->execute();
$req->execute();

// Recovery of the data
$data = $req->fetchAll(); 
?>