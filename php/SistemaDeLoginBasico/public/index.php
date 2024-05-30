<?php 
    //inicar sessao
    session_start();

    //control constante
    define('CONTROL', true);

    //exite usuario logado 
    $usuario_logado = $_SESSION['usuario'] ?? null;

    //verifica a rota a url 
    if(empty($usuario_logado)){
        $rota = 'login';
    }else{
        $rota = $_GET['rota'] ?? 'home';
    }


    //rotas
    $rotas = [
        'login' => 'login.php',
        'home' => 'home.php',
        'logout' => 'logout.php',
        'pag1' => 'pag1.php',
        'pag2' => 'pag2.php'
    ];

    if(!key_exists($rota, $rotas)){
        die('Acesso Negado');
    }else {
        require_once $rotas[$rota];
    }
?>