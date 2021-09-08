<?php 
   define("COTACAO", 5.47);

   $dolares = (float)readline("Digite o valor em dólares: ");

   echo $reais = $dolares * COTACAO;
?>