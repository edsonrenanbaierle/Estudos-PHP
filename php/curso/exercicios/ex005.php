<?php
    $salario = 1700;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
    <?php if($salario <= 1200): ?>
        <h1>Seu novo salário com acrescimo de 300 reais será: <?php echo $salario + 300  ?></h1>
    <?php elseif($salario > 1200 && $salario < 1600): ?>
        <h1>Seu novo salário com acrescimo de 250 reais será: <?php echo $salario + 250  ?></h1>
    <?php else: ?>
        <h1>Seu novo salário com acrescimo de 200 reais será: <?php echo $salario + 200  ?></h1>
    <?php endif; ?>
</body>
</html>