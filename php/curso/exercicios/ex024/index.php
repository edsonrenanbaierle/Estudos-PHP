<?php
    function salvarNome(){
        setcookie("name", filter_input(INPUT_GET, "name"), time() + 100);
    }

    salvarNome();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name">
        </div>
        <button type="submit">Salvar</button>
    </form>
    <a href="twoPage.php">Vizualizar Cokkie</a>
</body>
</html>