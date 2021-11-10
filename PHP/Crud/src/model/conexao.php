<?php 

$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'lanchonete1';

$conexao = new mysqli($host, $usuario, $senha, $db);

if($conexao->connect_errno){
   die ("Erro: $conexao->connect_errno");
}
// else{
//   echo "conexao ok";
// }

?>