<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>
    <h1>Loops (ou laços de repetição)</h1>
    <hr>
<?php
/* Loops tradicionais
while
for 
do/while */
?>

<h2>while(enquanto)</h2>
<?php
$i = 1; // variável de controle

while($i <= 5){
?>

    <p>Senac Penha - PHP (i vale <?=$i?>)</p>
<?php
 $i++;
}
?>

<hr>

<h2>do/while</h2>
<ul>
<?php
$j = 1;
do {
?>
<li>PHP (j vale <?=$j?>)</li>
<?php
    $j++;
} while ($j <= 5)
?>
</ul>

<hr>
<h2>for</h2>

<?php
$bandas = ["Pink Floyd", "Savatage", "Slayer"];
?>

<section>
    <h3>Bandas</h3>
<?php for ($k = 0; $k < count($bandas); $k++ ){ ?>
<p><?=$bandas[$k]?></p>
<?php } ?>
</section>

<h2>Lista de meses</h2>
<ol>
<?php
$meses = ["Jan", "Fev", "Mar", "Abr", "Maio", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"];
?>

<?php for ($v = 0; $v < count($meses); $v++){ ?>
<li><?=$meses [$v]?></li>
<?php
 } ?>

</ol>

<!-- Para cada Banca dentro do array Bandas, mostre um parágrafo. -->
<?php foreach ( $bandas as $banda ) { ?>
<p>Banda: <b><?=$banda?></b> </p> 
<?php } ?>
</body>
</html>