<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
    <h1>Processamento POST</h1>
    <hr>

<?php
$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$preco = $_POST['preco'];
$mensagem = $_POST['mensagem'];

?>

<ul>
    <li>Nome: <?=$nome?></li>
    <li>Fabricante: <?=$fabricante?> </li>
    <li>Preço: <?=$preco?></li>
    <li>Mensagem: <?=$mensagem?></li>
</ul>

</body>
</html>