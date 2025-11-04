<?php
    require "config.inc.php";

    echo "<p><a href='?pg=produtos-cadastro-form'>Cadastrar Produto</a></p>";
    echo "<h2>Lista de Produtos</h2>";

    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($resultado)){
        echo "Id: ".$dados['id']." | ";
        echo "Nome: ".$dados['nome']." | ";
        echo "Preço: R$ ".$dados['preco']." | ";
        echo "|  <a href='?pg=produtos-altera-form&id=$dados[id]'>Alterar</a> | ";
        echo "<a href='?pg=produtos-excluir&id=$dados[id]'>Excluir</a>";
        echo "<hr>";
    }
?>