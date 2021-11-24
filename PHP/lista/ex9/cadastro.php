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
   <title>Cadastro</title>
</head>
<body>
   <form action="cadastro.php" method="POST">
      <div class="col sm-8">
         <h1>Cadastre-se</h1>
         <div class="form-group">
            <label for="nome">Nome: </label>
            <input class="form-control" type="text" name="nome" id="nome" required>
            <label for="email">Email: </label>
            <input class="form-control" type="email" name="email" id="email" required>
            <label for="usuario">Usuário: </label>
            <input class="form-control" type="text" name="usuario" id="usuario" required>
            <label for="senha">Senha: </label>
            <input class="form-control" type="password" name="senha" id="senha" required>
            <input class="btn btn-primary" type="submit" value="Enviar"> <br>
            <a href="login.php">Logue</a>
         </div>
      </div>   
   </form>
</body>
</html>

<?php 
   $nome = $email = $usuario = $senha = '';

   if (isset($_POST['nome']) and isset($_POST['email']) and isset($_POST['usuario']) and isset($_POST['senha'])){
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];
      echo "chubiraudaundaun";
      $tempo = time()+ 1800;
      session_start();
      setcookie('dados1["nome"]', $nome, time()+$tempo);
      setcookie('dados1["email"]', $email, time()+$tempo);
      setcookie('dados1["usuario"]', $usuario, time()+$tempo);
      setcookie('dados1["senha"]', $senha, time()+$tempo);
   }
?>