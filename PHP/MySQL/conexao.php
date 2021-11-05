<?php 
   $host = "localhost";
   $usuario = "root";
   $senha = "";

   $conexao = new mysqli($host, $usuario, $senha);

   if ($conexao->connect_errno) {
      die('Erro'.$conexao->connect_errno);
   }
   else {
      echo "Conectado com sucesso";
   }
?>