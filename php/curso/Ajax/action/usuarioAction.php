<?php

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);
$arquivo = "usuario.txt";

switch($req){
    case 1:
        $nome = filter_input(INPUT_POST, "txtNome");
        $email = filter_input(INPUT_POST, "txtEmail");
        $telefone = filter_input(INPUT_POST, "txtTelefone");

        $str = "Nome: {$nome}|E-mail: {$email}|Telefone:{$telefone}";

        $fp = fopen($arquivo, "w");
        echo "aqui";
        if(fwrite($fp, "{$str}")){
            echo "1";
        }else{
            echo "0";
        }
        fclose($fp);
    break;

    case 2:
        $fp = fopen($arquivo, "r");
        $texto = fread($fp, filesize($arquivo));
        fclose($fp);
        echo $texto;
    break;

    default:
        echo "nada";
    break;
}