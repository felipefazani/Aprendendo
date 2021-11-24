<?php 
   // Classe Bichinho Virtual:Crie uma classe que modele um Tamagushi(Bichinho Eletrônico): 
   // a. Atributos: Nome, Fome, Saúde e Idade
   // b. Métodos: Alterar Nome,Fome, Saúde e Idade; Retornar Nome, Fome, Saúde e Idade 
   // Obs: Existe mais uma informação que devemos levar em consideração, o Humor do nosso tamagushi, 
   // este humor é uma combinação entre os atributos Fome e Saúde, ou seja, um campo calculado, então não devemos 
   // criar um atributo para armazenar esta informação por que ela pode ser calculada a qualquer momento.

   class BichinhoVirtual{
      private $nome, $fome, $saude, $idade, $humor;

      // altera atributos
      public function alteraNome($nome){
         $this->nome = $nome;
      }

      public function alteraFome($fome){
         $this->fome = $fome;
      }

      public function alteraSaude($saude){
         $this->saude = $saude;
      }

      public function alteraIdade($idade){
         $this->idade = $idade;
      }

      //retorna atributos
      public function retornaNome(){
         return $this->nome;
      }
      public function retornaFome(){
         return $this->fome;
      }
      public function retornaSaude(){
         return $this->saude;
      }
      public function retornaIdade(){
         return $this->idade;
      }
      
      //humor
      public function defineHumor(){
         $this->humor = $this->saude / $this->fome;
         return $this->humor;
      }
   
   }
?>