<?php 
   //  Use a função da questão passado e lance o dado 1 milhão de vezes. Conte 
   //  quantas vezes cada número saiu. A probabilidade deu certo? Ou seja, a 
   //  porcentagem dos números foi parecida?

   function Dado(){
      return rand(1, 6);
   }
   $n_repeticoes = [0, 0, 0, 0, 0, 0];
   for ($i=0; $i < 1000000; $i++) { 
      $aux = Dado();
      switch ($aux) {
         case 1:
            $n_repeticoes[0]++;
            break;
         case 2:
            $n_repeticoes[1]++;
            break;
         case 3:
            $n_repeticoes[2]++;
            break;
         case 4:
            $n_repeticoes[3]++;
            break;
         case 5:
            $n_repeticoes[4]++;
            break;
         case 6:
            $n_repeticoes[5]++;
            break;         
      }
   }

   print("probabilidades:\n");
   print("\n1:".$n_repeticoes[0]/1000000);
   print("\n2:".$n_repeticoes[1]/1000000);
   print("\n3:".$n_repeticoes[2]/1000000);
   print("\n4:".$n_repeticoes[3]/1000000);
   print("\n5:".$n_repeticoes[4]/1000000);
   print("\n6:".$n_repeticoes[5]/1000000);
   
   //quanto maior a quantidade de repeticoes mais próxima de 1/6 ficará para cada um, se a quantidade de repeticoes tender ao infinito a probabilidade de cada um tende a 1/6

?>