<?php

    try {
        $conn = new PDO('mysqli:host=localhost;dbname=sys', 'root','root');
        echo "conectado";
    } catch (PDOException $e) {
        echo "Erro ao se conectar" . $e->getMessage();
    }

?>


