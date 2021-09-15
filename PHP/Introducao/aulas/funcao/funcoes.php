<?php 
   function soma($n1, $n2, $n3 = 0, $n4){
      return $n1 + $n2 + $n3 + $n4;
   }

   echo soma(1, 2, 3, 4). "\n";
   echo soma(10, 20, 0, 20);

   function aumenta(&$vet){
      foreach ($vet as $num)
         $num *= 2;
   }

   $array = array(1, 2, 3, 4);

   aumenta($array);
?>