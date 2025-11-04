<?php
    require "config.inc.php";

    $id = $_REQUEST["id"];
    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($dados = mysqli_fetch_array($resultado)) {
            $nome = $dados["nome"];
            $descricao = $dados["descricao"];
            $preco = $dados["preco"];
            $id = $dados["id"];
        }
    }
?>

<form action="?pg=produtos-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>" required><br>
    <label>Descrição:</label>
    <textarea name="descricao"><?=$descricao?></textarea><br>
    <label>Preço:</label>
    <input type="text" name="preco" value="<?=$preco?>" required><br><br>
    <input type="submit" value="Alterar">
</form>