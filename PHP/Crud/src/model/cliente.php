<?php

class Cliente
{
   //atributos
   private $codigo;
   private $nome;
   private $endereco;
   private $telefone;

   //getters and setters

   public function getNome()
   {
      return $this->nome;
   }

   public function setNome($nome)
   {
      $this->nome = $nome;
      return $this;
   }

   public function getCodigo()
   {
      return $this->codigo;
   }

   public function setCodigo($codigo)
   {
      $this->codigo = $codigo;
      return $this;
   }

   public function getEndereco()
   {
      return $this->endereco;
   }

   public function setEndereco($endereco)
   {
      $this->endereco = $endereco;
      return $this;
   }

   public function getTelefone()
   {
      return $this->telefone;
   }

   public function setTelefone($telefone)
   {
      $this->telefone = $telefone;
      return $this;
   }

   public function listarTodos($conexao)
   {
      // consulta banco de dados

      // $comandosql = "Select codigo, nome, endereco, telefone";
      $comandosql = "Select * from cliente order by nome";
      $dados = $conexao->query($comandosql); // essa query retorna uma tabela com tudo o que foi solicitado
      return $dados;
   }

   public function fecharConexao($conexao, $dados = null)
   {
      if ($dados != null)
         $dados->free_result(); // limpa os dados da memoria do computador
      $conexao->close(); // fecha a conexao com o banco de dados     
   }

   public function inserirCliente($conexao, $obj)
   {
      $comandosql = "Insert into cliente(nome, endereco, telefone) values ('$obj->nome', '$obj->endereco', '$obj->telefone'";
      if ($conexao->query($comandosql))
         return true;
   }

   public function listarporCodigo($conexao, $codigo)
   {
      $comandosql = "Select * from cliente where codigo=$codigo";
      $dados = $conexao->query($comandosql);
      return $dados;
   }

   public function atualizarCliente($conexao, $obj)
   {
      $comandosql = "Update cliente set nome = '$obj->nome', endereco = '$obj->endereco', telefone = '$obj->telefone' where codigo = $obj->codigo";
      echo $comandosql;
      if ($conexao->query($comandosql))
         return true;
   }

   public function excluirCliente($conexao, $codigo){
      $comandosql = "Delete from cliente where codigo= $codigo";

      if ($conexao->query($comandosql))
         return true;
   }
}
