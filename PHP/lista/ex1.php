<?php 
   // 1) Em um campeonato de futebol existem 5 times e cada time possui 11 jogadores. Faça um programa que receba a idade, o peso e a altura 
   // de cada um dos jogadores. Calcule e mostre:
   // a) A quantidade de jogadores com idade inferior a 18 anos;
   // b) A média das idades dos jogadores de cada time
   // c) A média das alturas de todos os jogadores do campeonato;
   // d) A percentagem de jogadores com mais de 80 quilos entre todos os
   // jogadores do campeonato

   // definindo lista
   $qtdtimes = 2;
   $qtdjog = 2;
   $lista_de_jogadores = [[$qtdtimes], [$qtdjog]];
   $menor = $alturas = $pesos = 0;
   $idades = [$qtdtimes];

   // armazenando a lista
   for ($i=0; $i < $qtdtimes; $i++) { 
      print("\n-=-=TIME $i-=-=\n\n");
      for ($j=0; $j < $qtdjog; $j++) { 
         print("--Jogador $j---\n");
         $peso = (int) readline("Peso: ");
         $altura = (int) readline("Altura: ");
         $idade = (int) readline("Idade: ");
         $lista_de_jogadores[$i][$j] = ["peso"=>$peso, "altura"=>$altura, "idade"=>$idade];
      }
   }

   // calculando os dados requisitados
   for ($i=0; $i < $qtdtimes; $i++) {
      $idade = 0;
      for ($j=0; $j < $qtdjog; $j++) { 
         if ($lista_de_jogadores[$i][$j]["idade"] < 18)
            $menor++;
         
         $alturas += $lista_de_jogadores[$i][$j]["altura"];
         if ($lista_de_jogadores[$i][$j]["peso"] > 80)
            $pesos++;
         $idade += $lista_de_jogadores[$i][$j]["idade"];

      }
      $idades[$i] = $idade / $qtdjog;
   }
   $alturas = $alturas / ($qtdjog*$qtdtimes);
   $pesos = $pesos*100 / ($qtdjog*$qtdtimes);

   print("A média das alturas: $alturas\nQuantidade de jogadores menores: $menor\nO percentual de jogadores com mais de 80 quilos: $pesos% ");
   for ($i=0; $i < $qtdtimes; $i++) 
      print("\nMedia de idade do time $i: $idades[$i]");

?>