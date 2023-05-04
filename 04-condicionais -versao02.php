<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional</title>
    <style>
        .normal{
            background-color: lightblue;
            color: green;
        }
        .repor{
            background-color: lightpink;
            color: red ;
        }
        .urgente{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>(Versão 02)Condicionais</h1>
    <hr>


    <h2>Simples</h2>
<?php
$numero = 10;
if($numero >= 5){
?>
    <p><?=$numero?> é maior/igual a 5</p>

<?php
}
?>

    <h2>Composta</h2>
<?php
$produto = "Geladeira";
$qtdEmEstoque = 1; // o que temos no momento
$qtCritica = 5; // mínimo necessário
?>

<h3>Produto: <?=$produto?></h3>
<h4>Estoque: <?=$qtdEmEstoque?></h4>

<?php
if($qtdEmEstoque < $qtCritica){?>
    <p class="repor"> Está com baixo estoque</p>

 <?php
if($qtdEmEstoque == 0){
?>

        <p><span class="urgente">URGENTE!</span></p>

<?php
}
}else{
?>
    <p class="normal"> Está com a quantidade adequada</p>
<?php
}
?>


    <h2>Encadeada</h2>

<?php
/* if($produto == "Ultrabook"){
    $garantia = 3;
} elseif($produto == "Geladeira"){
    $garantia = 5;
}elseif($produto == "TV"){
    $garantia = 2;
}else{
    $garantia = 1;
} */
switch($produto){
    case "Ultrabook" : $garantia = 3; break;
    case "Geladeira" : $garantia = 5; break;
    case "TV" : $garantia = 2; break;
    default: $garantia = 1; break;
}
?>
<p>O <?=$produto?> tem garantia de <?=$garantia?> anos</p>




</body>
</html>