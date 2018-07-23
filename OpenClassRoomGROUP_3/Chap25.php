<?php


///////////////////////////////////////////////////////////
/*  Programmation pour éviter de ùontrer au visiteurs, dont
certains malveillants  */ /////////////////////////////////

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



///////////////////////////////////////////////////////////
/* Lecture de la table dans phpmyadmin grâce au langage SQL
*/ ////////////////////////////////////////////////////////

$reponse = $bdd->query('SELECT * FROM jeux_video');



?>
