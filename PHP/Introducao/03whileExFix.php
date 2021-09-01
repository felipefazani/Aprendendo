<?php 
   // Crie um programa que simule o funcionamento de um caixa de supermercado. O caixa fica aberto 
   // até o fim do expediente e pode processar a compra de vários clientes. Cada cliente pode comprar 
   // vários itens. Ao ler cada item deve ser exibida uma mensagem para o operador do caixa 
   // perguntando se há mais itens a serem processados. Ao final, exiba quanto a compra custou ao 
   // cliente. E então solicite do operador do caixa a informação se deseja fechar o caixa. Encerre o 
   // programa quando o usuário informar que deseja fechar o caixa.
   do {
      $soma = 0;
      do {
         echo "-=-=-=-=-=-=-=-\n";
         $prod = (float)readline("Digite o valor do produto: ");
         $soma += $prod;
         $a = (float)readline("Deseja sair? (1 - SIM, para NÃO digite outra tecla)");

      } while ($a != 1);

      echo "A conta desse cliente foi de ".$soma." reais\n";
      $n = readline("Deseja fechar o caixa? (1 - SIM, para NÃO digite outra tecla)");
   } while ($n != 1);
   
?>