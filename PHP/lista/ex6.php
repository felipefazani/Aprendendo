<?php 
   //  Uma professora, muito legal, fez 3 provas durante um semestre mas só vai levar 
   //  em conta as duas notas mais altas para calcular a média.
   //  Faça uma aplicação em PHP que peça o valor das 3 notas, mostre como seria a 
   //  média com essas 3 provas, a média com as 2 notas mais altas, bem como sua 
   //  nota mais alta e sua nota mais baixa.


   // criando as funcoes necessarias para o programa
   function media($list){
      $soma = 0;
      foreach($list as $key)
         $soma += $key;
      return $soma / count($list);
   }

   function menor($a, $b){
      if ($a > $b) 
         return $b;
      else 
         return $a;
   }

   // requisitando dados
   print("Digite o valor das provas:\n");
   $p1 = readline("P1:");
   $p2 = readline("P2:");
   $p3 = readline("P3:");

   
   
   // calculando maior e menor
   if ($p1 >$p2 and $p1 > $p3) {
      $maior = $p1;
      $menor = menor($p2, $p3);
      $meio = $menor == $p2 ? $p3 : $p2;
   }elseif ($p2 > $p3) {
      $maior = $p2;
      $menor = menor($p1, $p3);
      $meio = $menor == $p1 ? $p3 : $p1;
   }else {
      $maior = $p3;
      $menor = menor($p2, $p1);
      $meio = $menor == $p2 ? $p1 : $p2;
   }
   
   // medias
   $mediatotal = media([$p1, $p2, $p3]);
   $mediamaiores = media([$maior, $meio]);

   print("\n\nMaior:$maior\nMenor:$menor\nMedia das tres:$mediatotal\nMedia das maiores:$mediamaiores");
   
?>    