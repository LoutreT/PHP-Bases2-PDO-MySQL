<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e) {
  die ('Error : '. $e->getMessage());
}
// 2 //////////////////////////////////////////////////////////////////////////
$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(?,?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

/* Fonction permettant d'envoyer les données demandées vers
l'autre fichier qui l'affichera/le traitera. */
header('Location:Chap26minichat.php');






?>
