<?php 
   require "../model/conexao.php";
   require "../model/cliente.php"; // é requisito incluir conexao e cliente
   include "variaveis.php";

   $objCliente = new Cliente(); // instancia ou objeto da classe

   //popular(preencher) o cliente
   $objCliente->setCodigo($codigo);
   $objCliente->setNome($nome);
   $objCliente->setEndereco($endereco);
   $objCliente->setTelefone($telefone);
   $dados = $objCliente->listarTodos($conexao);

   if (isset($_GET['id'])) {
      $codigo = $_GET['id'];
      $acao = $_GET['acao'];
      if ($acao === 'excluir') {
         if ($objCliente->excluirCliente($conexao, $codigo)) {
            header("location:../view/index.php"); // rediciona de volta para o index
         }
      }
      elseif ($acao == 'editar') { // vai entrar aqui quando clicarem no editar
         // adquirindo dados do banco de dados
         $dadoscodigo = $objCliente->listarporCodigo($conexao, $codigo);
         while($dadosCliente = $dadoscodigo->fetch_object()){
            // variaveis
            $codigo = $dadosCliente->codigo;
            $nome = $dadosCliente->nome;
            $endereco = $dadosCliente->endereco;
            $telefone = $dadosCliente->telefone;
            $edicao = true;

         }
      }
   }
   elseif(isset($_POST['edicao'])){ // pelo que entendi, só vai entrar neste if quando clicar no botao salvar do formulario dentro do editarCliente.php
      if($objCliente->atualizarCliente($conexao, $objCliente)){
         header("location:../view/index.php"); // se der certo volta para o index
      }else{
         echo "Erro ao inserir!";
      }
   }
   elseif (isset($_POST['codigo'])) {
      if ($objCliente->inserirCliente($conexao, $objCliente)) {
         header("location:../view/index.php"); // se der certo volta para o index
      }else{
         echo "deu ruim parsero";
      }
   }

?>