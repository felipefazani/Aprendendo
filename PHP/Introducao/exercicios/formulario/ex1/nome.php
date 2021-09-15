<?php 
// Utilizando Formulário, crie um programa que receba o nome e
// sobrenome em dois input e depois exiba o nome e o sobrenome 
// concatenado em outra input
?>

<?php 
   if (isset($_POST["nome"]))
      $nome = $_POST["nome"];
   if (isset($_POST["sobrenome"]))
      $sobrenome = $_POST["sobrenome"];

   if (isset($_POST["nome"]) && isset($_POST["sobrenome"]))
      $nomeCompleto = $nome . " " . $sobrenome;
      // $nomeCompleto = "$nome $sobrenome";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nome e Sobre</title>
</head>
<body>
   <form action="nome.php" method="POST">
      <label for="nome">Nome: </label>
      <input type="text" id="nome" name="nome">

      <label for="sobrenome">Sobrenome: </label>
      <input type="text" id="sobrenome" name="sobrenome">
      
      <input type="submit" value="Enviar">
      <br>
      <br>
      <label for="nomecompleto">Nome completo: </label>
      <input type="text" id="nomecompleto" value="<?php if (isset($nomeCompleto)) echo $nomeCompleto?>" disabled>
   </form>
</body>
</html>