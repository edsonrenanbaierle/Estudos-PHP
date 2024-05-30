<?php 
    defined("CONTROL") or die ('Acesso Negado');

    //verifica se o formulario foi submetido 

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $usuario = $_POST['usuario'] ?? null;
        $senha = $_POST['senha'] ?? null;
        $erro = null;

        if(empty($usuario) || empty($senha)){
            $erro = "Usuario e Senha são obrigatorios!";
        }

        if(empty($erro)){
            $usuarios = require_once "./../inc/usuario.php";

            foreach ($usuarios as $key => $user) {
                if($user['usuario'] == $usuario &&  password_verify($senha, $user['senha'])){

                    //login 
                    $_SESSION['usuario'] = $usuario;

                    //volçtar a pagina inicial
                    header("Location: index.php?rota=home");
                }
            }

            //senha ou usuario errado
            $erro = "Usuario e/ou senha invalidos";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php?rota=login" method="post">
        <h3>Login</h3>
        <div>
            <label for="usuario">Usuario:</label>
            <input type="email" name="usuario" id="usuario">
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>
        <button type="submit">Enviar</button>
    </form>

    <?php if(!empty($erro)): ?>
        <p style="color: red;"><?php echo $erro ?></p>
    <?php endif; ?>  
</body>
</html>