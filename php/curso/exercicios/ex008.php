<?php

    $indice = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <ul>
        <?php while($indice < 20): ?>
            <?php if($indice == 12): ?>
                <li><?php echo "Número validado, posição $indice" ?></li>
            <?php else: ?>
                <li><?php echo $indice ?></li>
            <?php endif; ?> 
            <?php $indice++ ?>
        <?php endwhile; ?>
    </ul>
</body>
</html>