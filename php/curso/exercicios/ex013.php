<?php
    $frutas = [
        1 => "banana",
        2 => "maça",
        3 => "uva",
        4 => "melancia",
        5 => "abacaxo",
        6 => "limao"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assoc</title>
</head>
<body>
    <ul>
        <?php foreach ($frutas as $key => $fruta): ?>
            <li><?php echo "$key -> $fruta" ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>