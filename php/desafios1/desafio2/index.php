<?php 
    require_once __DIR__ . "/utils/fibonacci.php";
    require_once __DIR__ . "/utils/constantes.php";

    $entrada = readline("Digite uma string: ");
    $entradaSemEspacos = str_replace(" ", "", $entrada);
    $stringCodificada = ""; //local onde guardara a string codificada


    for($ind = 1; $ind <= strlen($entradaSemEspacos); $ind++){ //percorre toda a string 
        $posicaoDeCodificao = fibonacci($ind, $entradaSemEspacos[$ind -1]); //passa o indice da string atual/ o caractere
        $stringCodificada = $stringCodificada . ALFABETO[$posicaoDeCodificao];
    }

    echo "O resultado da codificação foi: " . $stringCodificada . "\n";
?>