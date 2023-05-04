<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Condicionais</h1>
    <hr>


    <h2>Simples</h2>
<?php
$numero = 10;
if($numero >= 5){
    echo"<p>$numero é maior/igual a 5</p>";
}
?>

    <h2>Composta</h2>
<?php
$produto = "Geladeira";
$qtdEmEstoque = 1; // o que temos no momento
$qtCritica = 5; // mínimo necessário
echo "<h3>Produto: $produto</h3>";
echo "<h4>Estoque: $qtdEmEstoque</h4>";
if($qtdEmEstoque < $qtCritica){
    echo"<p class='repor'> Está com baixo estoque</p>";

    if($qtdEmEstoque == 0){
        echo"<p><span class='urgente'>URGENTE!</span></p>";
    }
}else{
    echo"<p class='normal'> Está com a quantidade adequada</p>";
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
echo "<p>O $produto tem garantia de $garantia anos</p>";

?>
</body>
</html>