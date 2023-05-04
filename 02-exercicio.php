<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$pessoa = [
    "nome" => "Vinicius de Miranda Barbosa",
    "senha" => 12345678,
    "idade" => 20,
    "cidade" => "São Paulo",
];
?>


    <h1>Exercicio 02</h1>
    <p>Dados do usúario </p>
    <ol>
        <li>Nome: <?=$pessoa["nome"]?></li>
        <li>Idade: <?=$pessoa["idade"]?></li>
        <li>Cidade: <?=$pessoa["cidade"]?></li>
    </ol>

</body>
</html>


