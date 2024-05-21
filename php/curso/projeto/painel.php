<?php
    session_start();

    if(!isset($_SESSION['nomeusuario'])){
        header("Location: index.php?msg=1");
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
    <h1>Ola usuario: <?php echo $_SESSION['nomeusuario'] ?></h1>
    <button><a href="logout.php">Logout</a></button>
</body>
</html>

