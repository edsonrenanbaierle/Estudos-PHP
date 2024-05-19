<?php

    $soma = 2 + 60;
    $multiplicao = $soma * 2;
    $divisao = $soma/3;

    define("idadeMinima", 18);
    define("nomeCompleto", "Edson Renan Baierle");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>Testes</h1>
    <p>Variavel soma = <?php echo $soma ?></p>
    <p>Variavel multiplicao = <?php echo $multiplicao ?></p>
    <p>Variavel divisao = <?php echo $divisao ?></p>
    <p>Constante definida = <?php echo idadeMinima ?></p>
    <p>Constante definida meu nome = <?php echo nomeCompleto ?></p>
</body>
</html>