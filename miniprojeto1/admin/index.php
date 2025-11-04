<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="wrapper-admin">

    <header class="header-admin">
        <h1>Painel Administrativo</h1>
    </header>

    <nav class="nav-admin">
        <a href="index.php">Inicio</a>
        <a href="?pg=clientes-admin">Clientes</a>
        <a href="?pg=produtos-admin">Produtos</a>
        <a href="?pg=paginas-admin">Administra Páginas</a>
        <a href="?pg=contato-admin">Administrar Contatos</a>
    </nav>

    <main class="content-admin">
    <?php
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "principal.php";
        if (file_exists($var)) {
            include_once "$var";
        } else {
            echo "<h2>Bem-vindo ao Painel!</h2><p>Selecione uma opção no menu acima.</p>";
        }
    }elseif(isset($_GET['pg'])){ 
        $pg = $_GET['pg'];
        
        $paginas_permitidas = [
            'clientes-admin', 'clientes-cadastro-form', 'clientes-cadastro', 'clientes-altera-form', 'clientes-altera', 'clientes-excluir',
            'produtos-admin', 'produtos-cadastro-form', 'produtos-cadastro', 'produtos-altera-form', 'produtos-altera', 'produtos-excluir',
            'paginas-admin', 'contato-admin'
        ];
        
        $arquivo = $pg . ".php";

        if(in_array($pg, $paginas_permitidas) && file_exists($arquivo)){
            include_once "$arquivo";
        } else {
            echo "<div class='mensagem erro'>Página não encontrada ou não permitida.</div>";
        }
    }else{
        echo "<div class='mensagem erro'>Página não encontrada.</div>";
    }
    ?>
    </main>

</div> </body>
</html>