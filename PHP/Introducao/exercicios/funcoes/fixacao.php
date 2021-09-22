<?php 
   // Crie uma funcao que receba como parametro uma string com 5 nomes 
   // separados por '-'. Substitua o delimitador por ';'. Coloque todos
   // os nomes em maiúsculo. Converta essa string para vetor e após isso
   // liste os nomes com menos de 5 caracteres.
   // Exemplo
   // Entrada: $nome = "Caio-David-Ana-Leticia"
   // Saida: CAIO, ANA

   function menornome($string){
      $string = ltrim($string);
      $string = strtoupper($string);
      $a = explode("-", $string);
      $b = "";
      foreach ($a as $i)
         if (strlen($i) < 5) 
            $b = $b.$i.", ";
      $b[strlen($b) - 1] = " ";
      $b[strlen($b) - 2] = " ";
      $a = implode(";", $a);
      echo $b;
   }
   // menornome("Caio-David-Ana-Leticia");
?>