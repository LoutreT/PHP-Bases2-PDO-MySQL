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
/* Récupération dans la table dans phpmyadmin */
///////////////////////////////////////////////////////////
$reponse = $bdd->query('SELECT * FROM jeux_video');

///////////////////////////////////////////////////////////
/* Requête INSERT INTO pour loger de nouvelles infos dans le tableau
 ////////////////////////////////////////////////////////
INSERT INTO jeux_video(ID, nom, possesseur, console, prix, nbre_joueurs_max,
commentaires)
VALUES('', 'Civilisation', 'Vincent', 'Mac', 45, 8, 'Conquêtes');
Ci-dessus, Vous remarquerez que pour le premier champ (ID), j'ai laissé
des apostrophes vides. C'est voulu : le champ a la propriété auto_increment,
MySQL mettra donc le numéro d'ID lui-même. On pourrait même se passer du
champ ID dans la requête :

INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max,
commentaires) VALUES('Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde
guerre mondiale')

C'est encore plus simple ! Le champ ID sera de toute façon automatiquement
rempli par MySQL, il est donc inutile de le lister.*/
?>

/////////////// INSERT INTO  ///////////////////////////////////////////////////
<?php
$req = $bdd->prepare("INSERT INTO jeux_video(nom, possesseur, console, prix,
  nbre_joueurs_max, commentaires)VALUES(:nom, :possesseur, :console, :prix,
    :nbre_joueurs_max, :commentaires)");
$req->execute(array(
  'nom' => $nom,
  'possesseur' => $possesseur,
  'console' => $console,
  'nbre_joueurs_max' => $nbre_joueurs_max,
  'commentaires' => $commentaires
  ));
echo "Le jeu a bien été ajouté !";
?>

////////////////// UPDATE SET WHERE  ///////////////////////////////////////////
<?php
$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix,
  nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
	'nvprix' => $nvprix,
	'nv_nb_joueurs' => $nv_nb_joueurs,
	'nom_jeu' => $nom_jeu
	));
?>
