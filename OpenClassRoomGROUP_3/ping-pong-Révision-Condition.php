<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ping-pong</title>
  </head>
  <body>

    <h3>Choisissez un nombre entre 0 et 100 :</h3>

    <form class="" action="" method="POST">
      <input type="number" name="nombre" value="">
      <input type="submit" name="pongping" value="Confirmer ping-pong">
    </form>

    <?php

    if(isset($_POST["pongping"]))
    {
      $nombre = $_POST["nombre"];

      if ($nombre % 2 === 0){
        echo "ping";
      }
      else{
        echo "pong";
      }
    }
    ?>

  </body>
</html>
