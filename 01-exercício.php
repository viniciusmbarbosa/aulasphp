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
    define("NOME", "Vinícius de Miranda");
    define("CURSO", "Programador Web");
    define("CARGA", "260");
    const LIMITE = CARGA / 4;
    ?>

    <p>Nome: <?=NOME?></p>
    <p>Curso: <?=CURSO?></p>
    <p>Carga: <?=CARGA?></p>
    <p>Faltas: <?=LIMITE?></p>
</body>
</html>