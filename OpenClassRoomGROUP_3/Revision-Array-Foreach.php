<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/master.css">
    <meta charset="utf-8">
    <title>Révision foreach pour tableau associatif</title>
  </head>
  <body>

    <?php
      $PaysEuropeens = array("Albanie","Allemagne","Andorra","Autriche",
      "Belgique","Bosnie-Herzégovine","Bulgarie","Chypre","Croatie","Danemark",
      "Espagne","Estonie","Finlande","France","Grande-Bretagne","Grèce",
      "Hongrie","IrlandeSud","Italie","Kosovo","Lettonie","Lichtenstein",
      "Lituanie","Luxembourg","Macédoine","Malte","Moldavie","Monaco",
      "Monténégro","Norvège","Pays-Bas","Pologne","Portugal","Roumanie",
      "SanMarin","Serbie","Slovaquie","Slovanie","Suède","Suisse","Tchéquie",
      "Ukraine");

////// Afficher un pays //////////////////////////////////////////
      echo $PaysEuropeens[4],"<br><hr>";
      // echo "<br><hr>";

////// Afficher les pays du tableau //////////////////////////////
      print_r($PaysEuropeens);
      echo "<br><hr>";

////// Compter le nombre de pays /////////////////////////////////
      $nombreDePays = count($PaysEuropeens);
      echo $nombreDePays,"<br><hr>";

////// Rajouter une information  /////////////////////////////////
      array_push($PaysEuropeens, "Vatican");
      array_push($PaysEuropeens, 43);

////// Afficher les pays du tableau //////////////////////////////
      var_dump($PaysEuropeens);

    ?>

    <table>
      <tr>
        <h5>Pays Européens</h5>
      </tr>

      <?php
        foreach($PaysEuropeens as $Pays){
        echo "<tr>$Pays</tr><br>";
        // echo "<br>";
        }
      ?>

    </table>

  </body>
</html>
