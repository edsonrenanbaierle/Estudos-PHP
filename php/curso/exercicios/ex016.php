<?php
    $valorDeReajuste = 0;

    function reajusteDeSalario($salario, &$valorDeReajuste){
        $valorDeReajuste = $salario * 0.05;
        return $salario + $valorDeReajuste;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuse</title>
</head>
<body>
    <p>O valor de reajuste do salario ficou : R$<?php echo reajusteDeSalario(10, $valorDeReajuste) ?> com aumento de <?php echo $valorDeReajuste ?></p>
</body>
</html>