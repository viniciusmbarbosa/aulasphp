<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <!-- https://caniuse.com/?search=defer -->
    <h1>Formulário HTML</h1>
    <hr>

    <form autocapitalize="off" action="04-exercicio-dados.php" method="post">
        <p>
            <label for="nome">Nome do produto:</label>
            <input placeholder="Digite o nome do produto:" type="text" name="nome" id="nome">
        </p>

        <?php
        $fabricante = ["samsung", "motorola", "lenovo"];
        ?>

        <label for="fabricante">Fabricante:</label>

        <select name="fabricante" id="fabricante">
            <?php for ($f = 0; $f < count($fabricante); $f++) { ?>
                <option><?= $fabricante[$f] ?></option>



            <?php } ?>
        </select>





        <p>
            <label for="email">Preço do produto:</label>
            <input type="number" name="preco" id="preco" min="100" max="1000" step="0.01">
        </p>

        <p>
            <label for="mensagem">Mensagem:</label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>

</body>

</html>