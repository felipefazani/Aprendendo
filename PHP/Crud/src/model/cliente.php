<?php 

class Cliente{
   //atributos
   private $codigo;
   private $nome;
   private $endereco;
   private $telefone;

   //getters and setters

   public function getNome(){
      return $this->nome;
   }

   public function setNome($nome){
      $this->nome = $nome;
      return $this;
   }

   public function getCodigo(){
      return $this->codigo;
   }

   public function setCodigo($codigo){
      $this->codigo = $codigo;
      return $this;
   }

   public function getEndereco(){
      return $this->endereco;
   }

   public function setEndereco($endereco){
      $this->endereco = $endereco;
      return $this;
   }

   public function getTelefone(){
      return $this->telefone;
   }

   public function setTelefone($telefone){
      $this->telefone = $telefone;
      return $this;
   }
}

?>