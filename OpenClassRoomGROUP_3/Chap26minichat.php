<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP Mini-Chat</title>
  </head>

  <body>
      <form class="" action="Chap26minichat_post.php" method="POST">
        <p>

        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> : <input type="text" name="message" id="message" /><br />
        <input type="submit" value="Donner réponse">

        </p>
      </form>

  </body>
</html>


<?php
// 1 //////////////////////////////////////////////////////////////////////////
try {
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e) {
  die ('Error : '. $e->getMessage());
}
// 2 //////////////////////////////////////////////////////////////////////////
$reponse = $bdd->query('SELECT pseudo, message
  FROM minichat ORDER BY id DESC LIMIT 0, 10');
// 3 //////////////////////////////////////////////////////////////////////////
while($donnees = $reponse->fetch()){
  echo'<p><strong>'.htmlspecialchars($donnees['pseudo']) . '</strong> : '.
  htmlspecialchars($donnees['message']).'</p>';
}

// 4 //////////////////////////////////////////////////////////////////////////
// Clôture :
$reponse->closeCursor();

?>
