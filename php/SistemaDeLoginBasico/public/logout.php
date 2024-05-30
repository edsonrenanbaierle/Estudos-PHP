<?php 
    defined("CONTROL") or die ('Acesso Negado');

    session_destroy();

    header("Location: index.php?rota=login");
?>