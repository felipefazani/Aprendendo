<?php 
   $n1 = (float) $_POST["n1"];
   $n2 = (float) $_POST["n2"];
   $op = (float) $_POST["seletor"];

   switch ($op) {
      case 1:
         // soma
         echo $n1 + $n2;
         break;
      case 2:
         // subtração
         echo $n1 - $n2;
         break;
      case 3:
         // multiplicacao
         echo $n1 * $n2;
         break;
      case 4:
         // divisao
         echo $n1 / $n2;
         break;
      
      // default:
      //    # code... n vai precisar de default pq o valor sempre sera de 1 a 4
      //    break;
   }
?>