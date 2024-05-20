<?php
    $msg = "";

    function verificacaoDeDados(&$msg){
        $name = filter_input(INPUT_POST, "name");
        $email = filter_input(INPUT_POST, "email");
        $criptografiaEmail = base64_encode($email);

        if(strlen($name) >= 5){
            header("Location: twoPage.php?email=$criptografiaEmail&name=$name");
            $msg = "teste";
        }else if($name < 5 && $name != ""){
            $msg = "Nome deve contar mais de 5 letras";
        }
    }

    verificacaoDeDados($msg);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <?php if($msg != ""): ?>
        <p><?php echo $msg ?></p>
    <?php endif; ?>
</body>
</html>