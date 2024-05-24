<?php

    try {
        $conn = new PDO('mysql:host=meu-mysql-php;dbname=task', 'root','root');
    } catch (PDOException $e) {
        throw $e;
    }

?>


