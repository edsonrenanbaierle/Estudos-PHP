<?php
    $diaDaSemana = 6;
    $msg;

    switch ($diaDaSemana) {
        case 1:
            $msg = "Hoje é segunda-feira";
            break;
        case 2:
            $msg = "Hoje é terça-feira";
            break;
        case 3:
            $msg = "Hoje é quarta-feira";
            break;
        case 4:
            $msg = "Hoje é quinta-feira";
            break;
        case 5:
            $msg = "Hoje é sexta-feira";
            break;
        case 6:
            $msg = "Hoje é sabado";
            break;
        case 7:
            $msg = "Hoje é Domingo";
            break;
        default:
            $msg = "Dia não encontrado";
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da semana</title>
</head>
<body>
    <h1><?php echo $msg ?></h1>
</body>
</html>