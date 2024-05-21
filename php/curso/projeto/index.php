<?php
  session_start();

  $msg = "";
  require_once("./Controller/UsuarioController.php");
  require_once("./Model/Usuario.php");

  $usuario = new Usuario(); //instacia de usuario
  $usuarioController = new UsuarioController; //cotroller de usuario
  if(filter_input(INPUT_POST, "txtEmailLogin")){
    $usuarioObj = $usuarioController->autenticar(filter_input(INPUT_POST, "txtEmailLogin"), filter_input(INPUT_POST, "txtPasswordLogin"));
    if($usuarioObj != null){
      $_SESSION["nomeusuario"] = $usuarioObj->getNome();
      $_SESSION["emailusuario"] = $usuarioObj->getEmail();
      $_SESSION["datausuario"] = $usuarioObj->getData();
      header("Location: painel.php");
    }else{
      $msg = "<div class='alert alert-warning'>Usuario ou senha invalido!</div>";
    }
  }
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
    <form method="post">
      <input type="text" id="login" class="fadeIn second" name="txtEmailLogin" placeholder="email">
      <input type="password" id="password" class="fadeIn third" name="txtPasswordLogin" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
      <br>
      <?php $msg ?>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="./cadastro.php">Precisa Registrar-se?</a>
    </div>

  </div>
</div>
</body>
</html>