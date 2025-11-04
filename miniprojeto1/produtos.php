<?php
    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<h3>Produtos</h3>";
        while ($dados = mysqli_fetch_array($resultado)) {
            echo "<p>Nome: $dados[nome]</p>";
            echo "<p>Descrição: $dados[descricao]</p>";
            echo "<p>Preço: R$ $dados[preco]</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>Nenhum produto cadastrado</p>";
    }
?>