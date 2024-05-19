<?php 
//  phpinfo();
//nome banco no compose/user/senha banco/banco de dados que está acesando
$conn = mysqli_connect("db", "root", "root", "sys") or die(mysqli_error());
echo "banco conectado";
$conn->close();
?>