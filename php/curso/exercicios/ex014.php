<?php
    function multiplicacao($valor1, $valor2){
        return $valor1 * $valor2;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplição</title>
</head>
<body>
    <h1>Tabuada do 10</h1>
    <?php for($i = 0; $i <= 10; $i++): ?>
        <li><?php echo "$i x 10 = " . multiplicacao($i, 10) ?></li>
    <?php endfor; ?>
</body>
</html>