<?php
    require_once __DIR__ . "/constantes.php";

    /**
     * @param $posicaoCaractere
     * @return calculo do fibonaci divido pelo mod de 26 para entrar no alfabeto
     */

    function fibonacci($posicaoCaractere, $caractere){

        //numeros de inicialização fibonatti
        $num1 = 0;
        $num2 = 1; 
        $ind = 1;
        $totalSomaFibonacci = 1;

        while($ind < $posicaoCaractere){ //enquanto ind for menor que a posição na string do caractere
            $totalSomaFibonacci = $num1 + $num2;
            $num1 = $num2;
            $num2 = $totalSomaFibonacci;

            $ind++;
        }
        
        $valorKeyCaractere = array_search($caractere, ALFABETO);
        return ($totalSomaFibonacci + $valorKeyCaractere) % 26;

    }

?>