<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Processamento usando método POST</h1>
    <hr>
<?php

/* Se o campo nome OU o campo email estiverem vazios */
if(empty($_POST["nome"]) || empty($_POST["email"]) ){
?>
<p style="color:red;">Você deve preencher nome e e-mail!</p>

<?php 
}else{
/* Array SUPERGLOBAL $_GET[] 
É um array já existente na linguagem, responsável por armazenar dados transsmitidos via método GET.Cada dado, fica em uma chave asociativa dentro do array. Esta chave é o nome do campo do formulário.*/


/* capturando individo os dados dos campos do formulário  */


$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem']
?>

<h2>Dados recebidos</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail: <?=$email?></li>



    <?php if( !empty($assunto)){ ?>
        <li> Assunto: <?=$assunto?></li>

        <!-- -> não
        && -> E
        || -> ou -->
    <?php } ?>

    <!-- Verificando se o campo mensagem NÂO ESTÀ VAZIO -->
    <?php if ( !empty($mensagem)){?>
        <!-- Se não está, então mostramos a menagem digitada -->
        <li>Mensagem: <?=$mensagem?></li>
    <?php } ?>
    
</ul>

<?php } ?>
</body>
</html>                                                               