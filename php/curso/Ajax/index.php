<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/script.js" defer></script>
    <title>formualrio</title>
</head>
<body>
        <div>
            <label for="txtNome">Nome:</label>
            <input type="text" name="txtNome" id="txtNome">
        </div>
        <div>
            <label for="txtEmail">Email:</label>
            <input type="email" name="txtEmail" id="txtEmail">
        </div>
        <div>
            <label for="txtTelefone">telefone:</label>
            <input type="tel" name="txtTelefone" id="txtTelefone">
        </div>
        <div>
            <button id="btnCadastrar">Cadastrar</button>
            <button id="btnConsultar">Consultar</button>
            <span id="spresultado"></span>
        </div>
</body>
</html>