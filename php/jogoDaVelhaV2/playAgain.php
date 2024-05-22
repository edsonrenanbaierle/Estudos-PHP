<?php 
    /**
     * @return bool
     */


    function playAgain() : bool{
        $playAgain = readline("Deseja jogar novamente (y/n):");

        return $playAgain == "y" ? true : false;
    }
?>