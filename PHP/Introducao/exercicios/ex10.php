<?php 
   $divida = readline("Digite o valor da dívida: ");
   $juros = readline("Quanto de juros? ") / 100;
   $dias = readline("Dias de atraso: ");

   echo "\n O valor da multa é ", $divida * $juros * $dias;

?>