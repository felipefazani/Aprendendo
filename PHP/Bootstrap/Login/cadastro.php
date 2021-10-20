<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Cadastro</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
   <form method="post" class="login">
      <h1 class="h3 mb-3 font-weight-normal">Faça Cadastro</h1>
      <label for="inputNome" class="sr-only">Nome</label>
      <input type="text" id="inputNome" name="nome" class="form-control" placeholder="Nome" required autofocus="">
      <br>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus="">
      <br>
      <label for="inputUsuario" class="sr-only">Usuário</label>
      <input type="text" id="inputUsuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus="">
      <br>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastre</button>
   </form>
</body>

</html>

<?php 
   $nome = "";
   $email = "";
   $usuario = "";
   $senha = "";

   if (isset($_POST['nome']))
      $nome = $_POST['nome'];
   if (isset($_POST['email']))
      $email = $_POST['email'];
   if (isset($_POST['usuario']))
      $usuario = $_POST['usuario'];
   if (isset($_POST['senha']))
      $senha = $_POST['senha'];

   if (!isset($_COOKIE["dados"])) {
      setcookie("dados[nome]", $nome, time()+3600, "~", "dominiomtloko.com");
      setcookie("dados[email]", $email, time()+3600, "~", "dominiomtloko.com");
      setcookie("dados[usuario]", $usuario, time()+3600, "~", "dominiomtloko.com");
      setcookie("dados[senha]", $senha, time()+3600, "~", "dominiomtloko.com");
   }
?>