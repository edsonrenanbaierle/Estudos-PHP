<?php
    session_start();
    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
    }else{
        setcookie("msg", "Erro nome na cookie", time() + 10000000);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $name ?></h1>
    <a href="sair.php">Sair</a>
</body>
</html>