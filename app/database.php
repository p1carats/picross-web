<?php

$hostname = 'localhost';
$dbname = 'picross';
$dbuser = 'root';
$dbpass = '';

try {
  $bdd = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $dbuser, $dbpass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

//echo "Connexion BDD réussie!";