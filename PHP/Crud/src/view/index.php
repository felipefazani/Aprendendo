<?php
include "header.php";
include "modalCliente.php";
require "../controller/clienteController.php";
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
         <?php 
            while ($objcli = $dados->fetch_object()) {?> <!--  esse $dados->fetch_object() retorna transforma o $dados (que é uma tabela retornada la da funcao listartodos no cliente.php) em um objeto -->
         <tr>
            <th scope="row"><?php echo $objcli->codigo; ?></th>
            <td><?php echo $objcli->nome; ?></td>
            <td><?php echo $objcli->endereco; ?></td>
            <td><?php echo $objcli->telefone; ?></td>
            <td>
               <a href="editarCliente.php?id=<?php echo $objcli->codigo ?>&acao=editar">
               <i class="bi bi-pencil-square"></i> </a> 
               <a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir este cliente?'))location.href='../controller/clienteController.php?id=<?php echo $objcli->codigo ?>&acao=excluir'"> <i class="bi bi-trash"></i> </a>
            </td>
         </tr>
         <?php } ?> <!-- fecha o while aqui para repetir cada linha da tabela até terminar todos os elementos da tabela $objcli -->
         
      </tbody>
   </table>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadCliente">Cadastrar</button>
</body>

</html>