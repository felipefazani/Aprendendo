<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Login</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
   <form method="post" class="login">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Seu email" required autofocus="">
      <br>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
   </form>
</body>

</html>

<?php 
   session_start();
   if (isset($_POST['email']) && isset($_POST['senha'])) {
      
      if (isset($_COOKIE['dados'])) {
         if ($_COOKIE["dados['email']"] == htmlspecialchars($_POST["email"]) &&$_COOKIE["dados['senha']"] == htmlspecialchars($_POST["senha"])) {
            $_SESSION['login'] = 'logado';
            header("location:index.php");
         }
      }
   }
?>