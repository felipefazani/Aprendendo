<?php 
   if (isset($_POST["nome"]) and isset($_POST["codigo"]) and isset($_POST["nascimento"]) and isset($_POST["ingresso"])){
      $nome = $_POST["nome"];
      $cod = $_POST["codigo"];
      $nasc = (int) $_POST["nascimento"];
      $ingr = (int) $_POST["ingresso"];
      
      $idade = 2021 - $nasc;
      $trabalhado = 2021 - $ingr;
      if ($idade > 65 || $trabalhado > 30 || ($idade > 60 && $trabalhado > 25))
         $aposent = "pode requerer aposentadoria";
      else 
         $aposent = "não pode requerer aposentadoria";
      
      $mensagem = "Olá $nome, voce trabalhou $trabalhado, tem $idade anos e ".$aposent;
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Prova</title>
</head>
<body>
   <form action="prova1.php" method="POST">
      <label for="Nome">Nome:</label>
      <input type="text" id="Nome" name="nome"><br>

      <label for="Codigo">Código:</label>
      <input type="text" id="Codigo" name="codigo"><br>

      <label for="Ano_nasc">Ano de nascimento:</label>
      <input type="number" id="Ano_nasc" name="nascimento"><br>

      <label for="Ingresso">Ano de ingresso:</label>
      <input type="number" id="Ingresso" name="ingresso"><br>

      <input type="submit" value="Enviar"> <br>

      <?php if (isset($mensagem)) echo $mensagem?>
   </form>
</body>
</html>