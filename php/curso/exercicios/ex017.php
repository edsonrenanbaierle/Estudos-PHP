<?php
    // function quantidadeDeCaracteres($frase){
    //     echo strlen($frase);
    // }
    // quantidadeDeCaracteres($frase);

    // $frase = "Olá Meu nome é Edson";

    
    // $novaFrase = str_ireplace(['a', 'e', 'i', 'o', 'u'], '@', $frase);
    // echo $novaFrase;

    $nome = "Edson Renan Baierle";
    $firstName = explode(" ", $nome);
    echo "olá $firstName[0]";

?>