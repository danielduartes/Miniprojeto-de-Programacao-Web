<?php
    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
    }else{
        echo "<H2>Envio de dados não permitido</H2>";
    }

    $sql = "INSERT INTO produtos (nome, descricao, preco)
            VALUES ('$nome', '$descricao', '$preco')";

    $inserir = mysqli_query($conexao, $sql);

    if($inserir) {
        echo "<H2>Cadastrado com sucesso</H2>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }else{
        echo "Cadastrado não realizado.";
    }
?>