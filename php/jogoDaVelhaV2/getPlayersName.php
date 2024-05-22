<?php
    require_once __DIR__ . '/constante.php';

    function getPlayersName() : array {
        return [
            readline("Player 1(" . PLAYER_ONE_ICON . ") digite o seu nome: "),
            readline("Player 2(" . PLAYER_TWO_ICON . ") digite o seu nome: "),
        ];
    }