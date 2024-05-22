<?php
    /**
     * @param array $board
     * @return boll
     */

    require_once __DIR__ . "/constante.php";
    function isBoardFull(array $board) : bool{
        if(in_array(ICON, $board)){
            return true;
        }else{
            return false;   
        }
    }