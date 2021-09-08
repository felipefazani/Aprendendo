<?php 
   if(isset($_POST["name"])){
      $nome = $_POST["name"];
      // if(strstr($nome, ''))
      //    echo "entrou no str str";
   }
   isset($_POST["age"]) ? $idade = $_POST["age"]: "";

   if(isset($_POST["name"]) && isset($_POST["age"])){
      $mensagem = "Bem vindo $nome, você tem $idade";
   }
   
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formularios</title>
</head>
<body>
   <form action="form.php" method="POST">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="name">

      <label for="idade">Idade</label>
      <input type="number" max="150" id="idade" name="age">
      <p></p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Limpar">
      <label><?php if(isset($mensagem)) echo $mensagem ?></label>
   </form>
</body>
</html>