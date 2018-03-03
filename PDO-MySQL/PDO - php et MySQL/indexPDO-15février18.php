<?php
  // Pour se connecter à la BDD avec PDO :
  include('serverPDO-15fevrier18.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS - MySQL/indexPDO-15fevrier18.css">
    <title>indexPDO-15février18</title>
  </head>
  <body>

    <div id="firstPDO">


      <div class="Cadre1">


        <form class="" action="serverPDO-15fevrier18.php" method="post"><br><br>
          <input type="text"  name="nom" value="" > : Nom du jeu <br><br>
          <input type="text" name="possesseur" value=""> : possesseur <br><br>
          <input type="number" name="prix" value=""> : euros <br><br>
          <input type="text" name="console" value=""> : console <br><br>
          <input type="number" name="nbre_joueurs_max" value=""> : nombre de joueurs max <br><br>
          <input type="text" name="commentaires" value=""> : commentaires <br><br>
          <input type="submit"  name=""  value="Cliquez pour confirmation"> : Confirmation des données à enregistrer<br><br>
          <input type="hidden"  name="Jeu" value="Jeux">
        </form>

      <form action="serverPDO-15fevrier18.php" method="POST">

        <table>
          <tr>
            <th> Le nom du jeu </th>
            <th> Le possesseur de ce jeu est : </th>
            <th> il le vend à </th>
            <th> Ce jeu fonctionne sur </th>
            <th> et on peut y jouer à </th>
            <th> commentaires </th>
            <th> supprimer </th>
          </tr>

          <?php
            while($donnees = $games->fetch()) /*prend une ligne a la fois dans
            les 2 requêtes : la principale ("$ games" et dans celle pour "poster": "$ mysql")*/
            { // pour fichier Jeux_video
              // fetch en anglais signifie « va chercher ».

            echo "<tr>"
            ."<td>".$donnees['nom']."</td>"
            ."<td>".$donnees['possesseur']."</td>"
            ."<td>".$donnees['prix']."</td>"
            ."<td>".$donnees['console']."</td>"
            ."<td>".$donnees['nbre_joueurs_max']."</td>"
            ."<td>".$donnees['commentaires']."</td>"
            ."<td>"."<input type='checkbox' name='delete[]' value='{$donnees['nom']}' title='Supprimer un jeu'>"."</td>"
            ."</tr>";
                        // $mysql->closeCursor(); // Termine le traitement de la requête
            }
            echo
            "<tr>
            .<td>.</td>
            .<td>.</td>
            .<td>.</td>
            .<td>.</td>
            .<td>.</td>
            .<td>.</td>
            .<td>
            .<input type='submit' name='supprimer'value='delete'>
            .</td>
            .</tr>";
          ?>


        </table>

      </form>

        <br><br><br><hr><br><br>


      </div>

    </div>

  </body>
</html>
