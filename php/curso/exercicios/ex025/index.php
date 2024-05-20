<?php
    setcookie("msg", "", time() + 10000000);

    function Login(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = filter_input(INPUT_POST, "name");
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $emailIncriptografado = md5($email);

            if($name == "fulanodetal" && $emailIncriptografado == "d41d8cd98f00b204e9800998ecf8427e"){
                session_start();
                $_SESSION['name'] = $name;
                setcookie("msg", "teste", time() + 10000000);
                header("Location: painel.php");
            }else if(!($name == "fulanodetal" && $emailIncriptografado == "d41d8cd98f00b204e9800998ecf8427e")){
                setcookie("msg", "dados invalidos", time() + 10000000);
            }
        }
        
    }

    Login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <?php if($_COOKIE['msg'] != ""): ?>
        <p><?php echo $_COOKIE['msg'] ?></p>
    <?php endif; ?>
</body>
</html>