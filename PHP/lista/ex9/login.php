<!-- Usando sections e cookies:
1. Crie uma página de login em html, com os campos usuário e senha
2. Ao acessar a página de login pela primeira vez, o usuário deverá se
cadastrar. Crie a página de cadastro com os campos, nome, email, senha.
3. Armazene os dados de cadastro em um cookie;
4. Redirecione o usuário para a página de login;
5. O usuário deverá informar o usuário e a senha, a aplicação irá
verificar se os dados informados coincidem com o do cookie
gerado anteriormente;
6. Se estiver ok, efetue o login e crie uma sessão com os dados do
usuário. O usuário deverá ser redirecionado para uma página
principal -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <title>Login</title>
</head>
<body>
   <form action="login.php" method="POST">
      <div class="col sm-8">
         <h1>Login</h1>
         <div class="form-group">
            <label for="usuario">Usuário: </label>
            <input class="form-control" type="text" name="usuario" id="usuario" required>
            <label for="senha">Senha: </label>
            <input class="form-control" type="password" name="senha" id="senha" required>
            <input class="btn btn-primary" type="submit" value="Enviar"> <br>
            <a href="cadastro.php">Cadastre-se</a>
         </div>
      </div>   
   </form>
</body>
</html>

<?php 
   session_start();
   if (isset($_POST['senha']) and isset($_POST['usuario']) and isset($_COOKIE['dados1'])) {
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];
      if ($_COOKIE["dados1['senha']"] == $senha and $_COOKIE["dados1['usuario']"] == htmlspecialchars($usuario)) {
         $_SESSION['login'] = 'logado';
         header("location: index.php");
      }
   }
?>