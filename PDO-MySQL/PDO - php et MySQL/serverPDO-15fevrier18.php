<?php
        // Formule pour se connecter à la BD avec PDO :
        try
        {
    	  // On se connecte à MySQL
    	  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'user');

        //on gère les exceptions :
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } //Affichage des erreurs lors d'un soucis de connexion
        catch(Exception $e)
        {
    	    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
        }


      // $reponse = $bdd->query('Tapez votre requête SQL ici');
      // requête SQL que nous allons utiliser : SELECT * FROM jeux_video.
      // query en anglais signifie « requête ».
      // le SQL est un langage. C'est lui qui nous permet de communiquer avec MySQL.
      // donc, on fait :

      $games =  $bdd->query("SELECT * FROM jeux_video");
      if(isset($_POST['possesseur']))
      {
      $nomdujeu = ($_POST['nom']);
      $possesseur = ($_POST['possesseur']);
      $prix = ($_POST['prix']);
      $console = ($_POST['console']);
      $nbre_joueurs_max = ($_POST['nbre_joueurs_max']);
      $commentaires = ($_POST['commentaires']);

      /* CI-DESSOUS IL FAUT INSERER "bdd" POUR CONNECTER AVEC la ligne de code située plus haut :
      $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'user'); */
      $mysql = $bdd->prepare("INSERT INTO jeux_video (nom, possesseur, prix, console, nbre_joueurs_max, commentaires) VALUES (?,?,?,?,?,?)");
      $mysql->execute([$nomdujeu, $possesseur, $prix, $console, $nbre_joueurs_max, $commentaires]);

      header('location:indexPDO-15février18.php'); /* HYPER IMPORTANT POUR
      RETOURNER A LA PAGE indexPDO-15février18.php , SINON APRES SON CALCUL, IL VA NOUS
      MONTRER UNE PAGE BLANCHE*/
      }






      /* Ci-dessous, pour supprimer une ligne complète du tableau dans MySQL*/
      if(isset($_POST['delete']))
      {
        foreach($_POST['delete'] as $supp)
        {
        $bdd->exec("DELETE FROM jeux_video WHERE nom = '{$supp}'");
        // $reponse -> closeCursor();
        }
        /* Ci-dessous, HYPER IMPORTANT POUR RETOURNER A LA PAGE INDEX, SINON
        SINON APRES SON CALCUL, IL VA NOUS MONTRER UNE PAGE BLANCHE*/
      header('location:indexPDO-15février18.php');
      }
?>
