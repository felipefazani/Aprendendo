<?php 
   // Crie uma função que receba um valor e diga se é nulo ou não.
   function nulo($n){
      if(is_null($n))
         echo "$n é nulo\n";
      else
         echo "$n não é nulo\n";
   }
   $a = null;
   $b = 0;
   nulo($a);
   nulo($b)
?>