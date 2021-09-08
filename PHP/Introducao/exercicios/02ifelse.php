<?php 
   // Crie um algoritmo que leia dois valores (x e y) representando um intervalo. 
   // Em seguida, leia um novo valor (z) e verifique se z pertence ao intervalo [x,y].

   $x = readline("Digite o valor de X: ");
   $y = readline("Digite o valor de Y: ");
   $z = readline("Digite o valor de Z: ");

   if(($z >= $x) && ($z <= $y))
      echo "Z está dentro do intervalo [X,Y]";
   else
      echo "Z não pertence ao intervalo [X, Y]";
?>