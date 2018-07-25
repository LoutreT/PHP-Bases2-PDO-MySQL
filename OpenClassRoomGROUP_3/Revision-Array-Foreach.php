<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
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

////// Afficher les pays du tableau //////////////////////////////
      print_r($PaysEuropeens);
      echo "<br><hr>";

////// Compter le nombre de pays /////////////////////////////////
      $nombreDePays = count($PaysEuropeens);
      echo $nombreDePays,"<br><hr>";

////// Afficher les pays du tableau //////////////////////////////
      var_dump($PaysEuropeens);

////// 

    ?>

  </body>
</html>
