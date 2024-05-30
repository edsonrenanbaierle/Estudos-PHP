<?php 
    defined("CONTROL") or die ('Acesso Negado');
?>

<hr>
    <span>Usuario: <?php echo $_SESSION['usuario'] ?></span>
    <span>
        <a href="?rota=logout">Logout</a>
    </span>
<hr>

<nav>
    <a href="?rota=home">Home</a>
    <a href="?rota=pag1">pag1</a>
    <a href="?rota=pag2">pag2</a>
</nav>