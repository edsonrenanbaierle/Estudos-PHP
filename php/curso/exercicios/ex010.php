<?php

    $frutas = ['banana', 'tomate', 'maça', 'melancia', 'uva'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
</head>
<body>
    <select name="frutas" id="frutas">
        <?php for($i = 0; $i < count($frutas); $i++): ?>
            <option value="<?php echo $frutas[$i] ?>"><?php echo $frutas[$i] ?></option>
        <?php endfor; ?>   
    </select>
    <button type="button" onclick="alert(document.getElementById('frutas').value)">Selecione a fruta</button>
</body>
</html>