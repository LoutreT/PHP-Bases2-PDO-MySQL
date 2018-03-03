<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS - MySQL/indexPDO-15fevrier18.css">
    <title>PDO-Test-Possesseur PHP</title>
  </head>
  <body>

    <div class="cadre2">

      Pour sélectionner une ligne ou un élément :

      <form class="" action="" method="POST"><br><br>
        <!-- <input type="text"  name="nom" value="" > : Nom du jeu <br><br> -->
        <input type="text" name="possesseur" value=""> : possesseur <br><br>
        <input type="number" name="prix" value=""> : euros <br><br>
        <!-- <input type="text" name="console" value=""> : console <br><br> -->
        <!-- <input type="number" name="nbre_joueurs_max" value=""> : nombre de joueurs max <br><br> -->
        <!-- <input type="text" name="commentaires" value=""> : commentaires <br><br> -->
        <input type="submit"  name=""  value="Cliquez pour confirmation"> : Confirmation des Données à enregistrer<br><br>
        <input type="hidden"  name="Jeu" value="Jeux">
      </form>

      Essayons de construire une page capable de lister les jeux appartenant à
      <br>une personne et dont le prix ne dépasse pas une certaine somme :
      <br><br><br>

      <?php

      try
      {
          $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'user');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }

      if(isset($_POST['Jeu']))
        {
        $possesseur = ($_POST['possesseur']);
        $prix = ($_POST['prix']);


      $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
      $req->execute(array($_POST['possesseur'], $_POST['prix']));

      echo 'Du joueur : '.$_POST['possesseur'];
      echo '<ul>';
      while ($donnees = $req->fetch())
      {
      echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
      }
      echo '</ul>';
      $req->closeCursor();
      }

      ?>


    </div>

  </body>
</html>
