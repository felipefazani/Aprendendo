<?php 
include "header.php";
?>
<body class="container">
   <h1>Cadastro de Cliente</h1>
   <table class="table">
      <thead>
        <th scope="col">Códigos</th>
        <th scope="col">Nome</th>
        <th scope="col">Endereço</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
      </thead>
      <tbody>
         <tr>
            <th scope="row">1</th>
            <td class="table-active">nome</td>
            <td>@endereco</td>
            <td>@telefone</td>
            <td>Editar | Apagar</td>
         </tr>
      </tbody>
   </table>
   <button type="button" class="btn btn-primary">Cadastrar</button>
</body>
</html>