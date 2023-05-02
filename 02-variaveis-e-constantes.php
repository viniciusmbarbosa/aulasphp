<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váriáveis e constanntes</title>
</head>
<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>
    <h2>Variáveis</h2>
    <?php
    //Variáveis
    $curso = "Programador Web";
    $ano = 2023;
    $preco = 1278.75;
    $area = 'back-End';

    //Saídas de dados
    echo "<h2>Exemplo de saída usando variáveis</h2>";
    echo '<p>$curso<p>'; // trata como texto
    echo "<p>$curso</p>"; //interpolação

    /* Ao usar variáveis dentro de strings/textos, é necessária as aspas duplas "" para que o recurso seja interpretado */

    // Saída usando concatenação
    echo "<p><i> \"teste\"".$curso."<i></p>";

    /* Saída ABREVIADA/SIMPLIFICADA usando "shorthand tgs" do PHP */

    

    ?>
    <h2>Saída usando versão simplificada do PHP</h2>
    <!-- Estamos em 2023 estudando Back-End -->
    <p>Estamos em <?=$ano?> estudando <?=$area?></p>
    

    <!-- USANDO PHP SINTAXE TRANDICIONAL
    (Mais verbosa e suscetível a erros) -->
    <?php
    echo "<p>Estamos em $ano estudando $area</p>";
    ?>

    <h2>Constantes</h2>
    <?php
    //sintaxe tradicional
    define("AUTOR", "Tiago Bezerra dos Santos");
    define("JUROS", 10);

    //sintaxe mais recente
    const EMPRESA = "ABC tecnologia";
    
    
    ?>
    <p>Autor do sit: <?=AUTOR?></p>
    <p>Taxa de juros: <?=JUROS?> <?$ano?></p>
    <p>Prestador de serviço:<?=EMPRESA?></p>
    





</body>
</html>