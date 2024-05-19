<?php
    $nome = "Edson Renan Baierle";
    $idade = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>
<body>
    <?php if($idade >= 18): ?>
        <h1 style="color: green;">Olá <?php echo $nome ?>, você pode participar do projeto</h1>
    <?php else: ?>
        <h1 style="color: red;">Olá <?php echo $nome ?>, você não pode participar do projeto</h1>
    <?php endif; ?>
</body>
</html>