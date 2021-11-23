<?php 
   // . Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca 
   // tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmos 
   // que calcule e imprima quantos anos serão necessários para que Juca 
   // seja maior que Chico

   $chico = 1.5;
   $juca = 1.1;
   $quantosanos = 0;
   while($juca<$chico){
      $juca += 0.03;
      $chico += 0.02;
      $quantosanos++;
      print("ano:$quantosanos\njuca:$juca\nchico:$chico\n\n");
   }

   print($quantosanos);
?>