<?php
    require_once __DIR__ . "/constante.php";

    /**
     * @param int $position
     * @param array $board
     * @return boolean
     */

    function isPositionCorrect(int $position, array $board){
        //verifica se a posicao digitada é de 0 a 8
        if(!in_array($position, [0, 1, 2, 3, 4, 5, 6, 7, 8])){
            echo "Por Favor, digite uma posição entre 0 e 8";
            return false;
        }

        //verifica se a posição no qual foi digitada contem o .  se nao conter quer dizer que já foi preenchida
        if(!$board[$position] == ICON){
            echo "Posição já preenchida com $board[$position], por favor digite uma posição valida!";
            return false;
        }

        return true;
    }