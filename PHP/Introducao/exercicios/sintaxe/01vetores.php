<?php 
   $nome = [];
   $nome = array(); // definição de array

   // definição com atribuição de indíce numérico automático
   $nome = ["Caio", "João", "Cintia"]; 

   // definição com atribuição de vetor associativo
   $nome = ["aluno1" => "Caio", "aluno2" => "João", "aluno3" => "Cintia"];
   $nome["aluno1"]; // retornaria Caio
   $nome["aluno2"]; // retornaria João
   $nome["aluno3"]; // retornaria Cintia


   $agenda =["nome" => "Caio", "telefone" => 19993029349, 18, 1024, "peso" => 90];
   
   $agenda["nome"]; // retornaria Caio
   $agenda[0]; // retornaria 18
   $agenda[1]; // retornaria 1024
   $agenda["peso"]; // retornaria 90
   $agenda[90]; // não vai retornar peso

   
   $agenda[] = 10; //adiciona 10 no fim do vetor criando mais um espaço
   // $nome.append(10); não sei o porquê mas está dando problema no meu .append mas ele teria o mesmo funcionamento dde adicionar no fim do vetor

?>