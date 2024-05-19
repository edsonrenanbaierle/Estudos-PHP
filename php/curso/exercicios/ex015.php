<?php
    function exibicao($array){
        foreach ($array as $valor) {
            echo "<li> $valor </li>";
        }
    }

    $arrayNames = ['Edson', 'Caua', 'Iury'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>teste</h1>
    <ul>
        <?php exibicao($arrayNames) ?>
    </ul>
</body>
</html>