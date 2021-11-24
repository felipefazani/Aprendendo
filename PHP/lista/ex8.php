<?php 
// Usando funções para manipulação de arrays:
// Preencher um vetor com os números 10 a 20, e depois mostrar os elementos pares do vetor de trás pra frente. 
// E também mostrar os números ímpares.
   function randArray($tam){
      for ($i=0; $i < $tam; $i++)
         $a[$i] = rand(10, 20);
      return $a;
   }
   
   function pares($lista){
      // devolve uma lista com todos os números pares de $lista de tras para frente
      $j = 0;
      for ($i=count($lista) - 1; $i >= 0; $i--)
         if ($lista[$i] % 2 == 0) {
            $v[$j] = $lista[$i];
            $j++;
         }
      return $v;
   }

   function impares($lista){
      // devolve uma lista com todos os números impares de $lista de tras para frente
      $j = 0;
      for ($i=count($lista) - 1; $i >= 0; $i--)
         if ($lista[$i] % 2 != 0) {
            $v[$j] = $lista[$i];
            $j++;
         }
      return $v;
   }

   $a = randArray(10);
   $p = pares($a);
   $i = impares($a);

   print_r($a);
   print_r($p);
   print_r($i);

?>