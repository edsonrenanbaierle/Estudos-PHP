<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="widht-device-widht, initial-scale=1">
    <link rel="bootstrap/css/bootstrap.min.css" href="style.css">
    <link rel="stylesheet" href="./css/index.css">
    <script src="./bootstrap/js/bootstrap.min.js" defer></script>
    <script src="./js/jquery-3.7.1.min.js" type="text/javascript" defer></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./icons/user_456212.png" id="icon" alt="User Icon"/>
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="txtNomeRegistro" placeholder="nome">
      <input type="text" id="login" class="fadeIn second" name="txtEmailRegistro" placeholder="email">
      <input type="password" id="password" class="fadeIn third" name="txtPasswordLogin" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Cadastro">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="./index.php">voltar</a>
    </div>

  </div>
</div>
</body>
</html>

