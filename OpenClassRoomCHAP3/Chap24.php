<?php

/* Pour éviter d'afficher le type d'erreurs à des inconnus qui
visiteraient le siteweb :   */
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}






  $reponse = $bdd->query('SELECT * FROM jeux_video');


// THEORIE :  $donnees = $reponse->fetch();  // fetch = "va chercher"
  /* Ci-DESSUS : $donnees deviendra un array après qu'éléments soient récupérées
  dans un phpmyadmin ligne après lignes */

while($donnees = $reponse->fetch())
{
?>
  <p>
  <strong>Jeu</strong> :
  <?php echo $donnees['nom']; ?><br />
  Le possesseur de jeu est :
  <?php echo $donnees['possesseur']; ?>,
  et il le vend à
  <?php echo $donnees['prix']; ?>
  euros ! <br/>

  Ce jeu fonctionne sur
  <?php echo $donnees ['console']; ?>
  et on peut y jouer à
  <?php echo $donnees ['nbre_joueurs_max']; ?>
  au maximum <br/>

  <?php echo $donnees ['possesseur']; ?>
  a laissé ces commentaires sur
  <?php echo $donnees ['nom']; ?> :
  <em><?php echo $donnees ['commentaires']; ?></em> <!-- </em> permet l'italique en CSS -->
  </p>

<?php
}

$reponse->closeCursor();

?>
