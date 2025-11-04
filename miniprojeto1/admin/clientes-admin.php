<?php
    require "config.inc.php";

    echo "<a href='?pg=clientes-cadastro-form' class='btn-cadastrar'>Cadastrar Cliente</a>";
    echo "<h2>Lista de Clientes</h2>";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    echo "<table class='admin-table'>";
    echo "<thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Ações</th>
            </tr>
          </thead>";
    echo "<tbody>";

    while($dados = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$dados['id']."</td>";
        echo "<td>".$dados['cliente']."</td>";
        echo "<td>".$dados['cidade']."</td>";
        echo "<td>".$dados['estado']."</td>";
        echo "<td class='acoes'>
                <a class='alterar' href='?pg=clientes-altera-form&id=$dados[id]'>Alterar</a>
                <a class='excluir' href='?pg=clientes-excluir&id=$dados[id]'>Excluir</a>
              </td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
?>