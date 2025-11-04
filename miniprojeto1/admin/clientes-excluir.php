<?php
    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id='$id'";

    if ($resultado = mysqli_query($conexao, $sql)) {
        echo "<br><h2>Cliente excluído com sucesso!</h2>";
        echo "<br><a href='?pg=clientes-admin'>Voltar</a>";
    } else {
        echo "<br><h2>Erro ao excluir cliente.</h2>";
        echo "<a href='?pg-clientes-admin'>Voltar</a>"; 
    }
?>