<?php
//Detectando o nome do arquivo/página aberta no momento
$pagina =  basename($_SERVER['PHP_SELF']);

//Analisar qual é a página aberta e determinando o titulo
switch($pagina){
    case 'index.php': $titulo = "página Inicial";break;
    case 'produtos.php': $titulo = "produtos"; break;
    case 'servico.php': $titulo = "servico"; break;
    default: $titulo = "Contato"; break;
}
 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Somente se estiver na página contato.php, carrege o CSS abaixo -->
    <?php if($pagina == "contato.php"){?>
    <link rel="stylesheet" href="css/contato.css">
    <?php } ?>
    <title>Site HTMl - <?=$titulo?></title>
</head>

<body>
    <header>
        <h1>Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servico.php">Serviço</a>
            <a href="contato.php">Contato</a>

        </nav>
    </header>
    <main>
        