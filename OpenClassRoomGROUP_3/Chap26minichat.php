<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP Mini-Chat</title>
  </head>
  <body>

    <div class="Fenetre">
      <h4 id="exo4">
      <br>Quel est votre conversation ? <b>Essayez d'écrire</b> .</h4>

      <form class="" action="index.html; #exo2" method="post">
        <input type="pseudo" name="pseudo" value="">
        <input type="text" name="text" value="">
        <button type="button" name="Envoyer">Envoyer</button>
        <input type="submit" name="Envoyer" value="Donner réponse">
      </form>

    </div>

  </body>
</html>




<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=_ _ _ _;charset=utf8', 'root', '');
}
catch (\Exception $e) {
  die ('Error : '. $e->getMessage());
}



$req = $bdd->prepare('INSERT INTO _ _ _ _ _ _ _(,,,) VALUES(,,,)');

$reponse = $bdd->query('SELECT * FROM _ _ _ _ _ _');

while($donnees = $reponse->fetch()){

}


// Clôture :
$reponse->closeCursor();

?>
