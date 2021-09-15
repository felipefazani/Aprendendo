<?php 
   //Crie uma função que receba um valor e informe se ele é positivo ou não.
   function positivo($num){
      if ($num > 0)
         echo "$num é positivo\n";
      else if($num < 0)
         echo "$num é negativo\n";
      else
         echo "$num é neutro (zero)";      
   }

   function is_posi($n){
      if($n >= 0)
         return true;
      else
         return false;
   }

   positivo(4);
   positivo(-4);  
   positivo(0);  

?>