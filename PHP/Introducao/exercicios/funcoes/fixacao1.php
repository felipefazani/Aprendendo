<?php 
   // preencher um vetor com numeros inteiros (8unidades); solicitar um numero
   // do teclado. Pesquisar se esse numero existe no vetor. Se existir, imprimir
   // em qual posicao do vetor. Se nao existir, imprimir mensagem que nao existe.
   $vetor = [200, 2, 3, 12, 13, 14, 23, 24];
   $n = (int)readline("Digite um numero: ");

   if (in_array($n, $vetor))
      echo array_search($n, $vetor);
   else
      echo "O numero digitado nao esta no vetor";
?>