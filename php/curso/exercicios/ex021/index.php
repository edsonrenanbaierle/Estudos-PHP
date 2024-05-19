<?php
    function gravarTxt(){
        $fp = fopen("file.txt", "a+");
        fwrite($fp, "Nome: " . $_POST['name'] . " \r\n");
        fwrite($fp, "E-mail:: " . $_POST['email'] . " \r\n");
        fwrite($fp, "Telefone: " . $_POST['telefone'] . " \r\n");
        fwrite($fp, "RG: " . $_POST['rg'] . " \r\n");
        fwrite($fp, "---" . " \r\n");
        fclose($fp);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">E-mail: </label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="telefone">telefone: </label>
            <input type="text" name="telefone">
        </div>
        <div>
            <label for="rg">Rg: </label>
            <input type="text" name="rg">
        </div>
        <button type="submit" onclick="<?php gravarTxt() ?>">Enviar</button>
        <a href="twoPage.php">Pagina de exebição</a>
    </form>
</body>
</html>