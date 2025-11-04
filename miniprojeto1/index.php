<?php
    include_once "topo.php";
    include_once "menu.php";

    echo '<main class="conteudo-site">'; 

    if(empty($_SERVER["QUERY_STRING"])){
        $var = "conteudo";
        include_once "$var.php";
    }else{
        $pg = $_GET['pg'];
        include "$pg.php";
    }

    echo '</main>'; 

    include_once "rodape.php";
?>