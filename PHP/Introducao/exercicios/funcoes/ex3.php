<?php 
   // Crie uma função que receba três valores, 'a', 'b' e 'c', que são os coeficientes de 
   // uma equação do segundo grau e retorne o valor do delta, que é dado por 'b² - 4ac’
   function delta($a, $b, $c){
      return $b**2 - 4*$a*$c;
   }
   // echo "delta de a = 1, b = 5, c = 10\n" . delta(1, 5, 10);
   // echo "\ndelta de a = 1, b = 2, c = 3\n" . delta(1, 2, 3);
?>