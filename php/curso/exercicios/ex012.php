<?php 
    $arrayNomes =  ["Edson", "Caua", "Iury","Helena", "Felipe", "João"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomes</title>
</head> 
<body>
    <ul>
        <?php foreach ($arrayNomes as $nome): ?>
            <li><?php echo $nome ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>