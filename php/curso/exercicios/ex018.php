<?php
    $frutas = ["Banana", "Maça", "Laranja"];

    $nome = filter_input(INPUT_POST, "name");
    $indFruta = filter_input(INPUT_POST, "frutas", FILTER_SANITIZE_NUMBER_INT);

    if((strlen($nome) >= 5 && strlen($nome) < 100) && isset($nome)){
        echo "Nome Válido";
    }else{
        echo "Nome Invalido";
    }

    if(isset($indFruta)){
        $fruta = $frutas[$indFruta];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" >
        </div>
        <div>
            <select name="frutas">
                <?php for($ind = 0; $ind < count($frutas); $ind++): ?>
                    <option value="<?php echo $ind ?>"><?php echo $frutas[$ind] ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>

    </form>

    <p>Nome: <?php echo $nome ?></p>
    <p>Fruta: <?php echo $fruta ?></p>
</body>
</html>