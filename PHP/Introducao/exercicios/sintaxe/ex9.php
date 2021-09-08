<?php 
   define("CONSUMO", 12);
   $km = -(readline("KM inicial: ") - readline("KM final: "));
   echo "\n", 'Foram consumidos ', $km / CONSUMO, ' litros no percurso';
?>