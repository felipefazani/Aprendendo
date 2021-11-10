<?php 
   require "../model/conexao.php";
   require "../model/cliente.php"; // é requisito incluir conexao e cliente

   $objCliente = new Cliente(); // instancia ou objeto da classe
   $dados = $objCliente->listarTodos($conexao);

   if (isset($_GET['id'])) {
      $codigo = $_GET['id'];
      $acao = $_GET['acao'];
      if ($acao === 'excluir') {
         if ($objCliente->excluirCliente($conexao, $codigo)) {
            header("location:../view/index.php"); // rediciona de volta para o index
         }
      }
   }

?>