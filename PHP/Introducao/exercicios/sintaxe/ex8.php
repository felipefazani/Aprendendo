<?php 
   $valor = (float)readline("Quanto está o litro do combustível? ");
   $dinheiro = (float)readline("Quantos reais deseja abastecer? ");

   echo "\n", 'Com ', $dinheiro, ' reais voce pode abastecer ', $dinheiro/$valor, ' litros';
?>