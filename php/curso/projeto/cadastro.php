<?php
  require_once("./Controller/UsuarioController.php");
  require_once("./Model/Usuario.php");

  var_dump($usuarioController->retornarUsuario("edsonbaierle@gmail.com.txt")); 
  $msg = "";

  //txtNomeRegistro txtEmailRegistro txtPasswordLogin
  if(filter_input(INPUT_POST, "txtEmailRegistro")){


    $usuario = new Usuario(); //instacia de usuario
    $usuarioController = new UsuarioController; //cotroller de usuario

    $usuario->setNome(filter_input(INPUT_POST, "txtNomeRegistro"));
    $usuario->setEmail(filter_input(INPUT_POST, "txtEmailRegistro"));
    $usuario->setSenha(filter_input(INPUT_POST, "txtPasswordLogin"));
    $usuario->setData(date('Y-m-d H:i:s'));

    $result = $usuarioController->cadastrar($usuario);

    switch ($result) {
      case 1:
        $msg = "<div class='alert alert-sucess'>Usuário Cadastrado com sucesso!</div>";
        break;
      case -1:
        $msg = "<div class='alert alert-warning'>Usuário cadastrado!</div>";
        break;
      case -2:
        $msg = "<div class='alert alert-warning'>Dados Invalidos!</div>";
        break;
      case -10:
        $msg = "<div class='alert alert-warning'>Erro ao tentar cadastrar, tente mais tarde!</div>";
        break;
      default:
        # code...
        break;
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
      <input type="text" id="loginNome" class="fadeIn second" name="txtNomeRegistro" placeholder="nome">
      <input type="text" id="loginEmail" class="fadeIn second" name="txtEmailRegistro" placeholder="email">
      <input type="password" id="password" class="fadeIn third" name="txtPasswordLogin" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Cadastro">
      <br>
      <div>
          <?php echo $msg ?>
      </div>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="./index.php">voltar</a>
    </div>

  </div>
</div>
</body>
</html>

