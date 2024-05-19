<?php
    $array =  ["Mouse", "Teclado", "Monitor","Gabinete", "Estabilizador", "Caixa de som"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array Invertido</h1>
    <ul>
        <?php for($i = count($array) - 1; $i >= 0; $i--): ?>
            <li><?php echo $array[$i] ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>