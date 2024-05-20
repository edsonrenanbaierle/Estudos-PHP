<?php   
    session_start();
    session_destroy();
    setcookie("msg", "Usuario fez Logout", time() + 10000000);
    header("Location: index.php");
?>