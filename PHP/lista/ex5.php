<?php 
   $op = readline("Para transformar Fahrenheit em Celsius digite 1 para o contrário digite 2:");
   switch ($op) {
      case 1:
         $f = readline("Digite o valor em Fahrenheit:");
         $c = 5*($f-32)/9;
         print("\n$f °F corrensponde a $c °C");
         break;
      case 2:
         $c = readline("Digite o valor em graus Celsius:");
         $f = (9*$c/5) + 32;
         print("\n$c °C corrensponde a $f °F");
         break;
      
      default:
         print("\n\nVocê digitou alguma opção diferente de 1 e 2!");
         break;
   }
?>