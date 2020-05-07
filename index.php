<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css">
    <title></title>
    <?php
     // include "prova.php";
     ?>
  </head>
  <body>

   <?php
   echo "numeri random: <br>";
   // salvo var per numero massimo
   $max = 0;
   // salvo var per numero minimo
   $min = 100;
   // salvo var per somma numeri e media numeri
   $avg = 0;
// ciclo per creare lista 10 numeri
 for ($i = 0; $i < 10; $i++){
   // stampa dieci numeri random
   $eachNum = rand(1,100);
   echo "<br>ogni numero: " . $eachNum . "<br>";
   // sommo i numeri
   $avg += $eachNum;
   // ricavo il numero minore
   if ($eachNum < $min){
     $min = $eachNum;
   }
   // ricavo il numero maggiore
   if ($eachNum > $max){
     $max = $eachNum;
   }
 }

 echo "<br>--------------<br>";
 echo "numero più alto: " . $max;
 echo "<br>--------------<br>";
 echo "numero più basso: " . $min;
 // stampo il totale numeri
 echo "<br>--------------<br>";
 echo "totale: " . $avg;
 echo "<br>--------------<br>";
 echo "media: " . $avg / 10;


   
    ?>
  </body>
</html>
