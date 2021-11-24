<?php 
//  Crie um aplicativo de conversão entre as temperaturas Celsius e Farenheit.
//  Primeiro o usuário deve escolher se vai entrar com a temperatura em Célsius ou 
//  Farenheit, depois a conversão escolhida é realizada através de um comando 
//  SWITCH.
//  Se C é a temperatura em Célsius e F em farenheit, as fórmulas de conversão são:
//  C= 5.(F-32)/9
//  F= (9.C/5) + 32
 
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