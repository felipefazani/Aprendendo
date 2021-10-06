<?php 
   class Bola{
      // atributos ou propriedades - sãp as variáveis da classe
      public $cor, $circunferencia, $material;

      // métodos ou comportamentos - funcões da classe
      public function trocaCor($color){
         $this->cor = $color; // o this referencia ao atributo
      }

      public function mostraCor(){
         return $this->cor;
      }
   }

   // criando uma instancia da classe, famoso objeto
   // $objBola = new Bola();
   // $objBola-> trocaCor("azul");
   // echo $objBola->mostraCor();

   class Quadrado{
      // atributos
      public $lado;

      // métodos
      public function trocaLado($valorLado){
         $this->lado = $valorLado;
      }

      public function lado(){
         return $this->lado;
      }

      public function area(){
         return $this->lado * $this->lado;
      }
   }

   class Retangulo{
      public $comprimento, $largura;

      public function comprimentoLargura($c, $l){
         $this-> comprimento = $c;
         $this-> largura = $l;
      }

      public function mostraLados(){
         return ["comprimento" => $this->comprimento, "largura" => $this->largura];
      }

      public function area(){
         return $this->comprimento * $this->largura;
      }

      public function perimetro(){
         return ($this->comprimento * 2) + ($this->largura * 2);
      }
   }
   
   $l = (int) readline("Digite o valor da largura: ");
   $c = (int) readline("Digite o valor do comprimento: ");

   $ret = new Retangulo();
   $ret -> comprimentoLargura($c, $l);

   $area = $ret->area();
   $perimetro = $ret->perimetro();
   echo "A area é ".$area;
   echo "\nO perimetro é ".$perimetro;

?>