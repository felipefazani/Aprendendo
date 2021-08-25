<?php 
   echo "Digite seu nome: ";
   $nome = rtrim(fgets(STDIN));
   echo "Seu endereço: ";
   $endereco = rtrim(fgets(STDIN));
   echo "E sua idade: ";
   $idade = rtrim(fgets(STDIN));

   echo $nome.'  em '.$endereco.' e tem '.$idade.' anos';

?>