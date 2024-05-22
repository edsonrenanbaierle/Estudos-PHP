<?php   


    require_once __DIR__ . "/constante.php";

    /**
     * @param string $winner
     * @param array $players
     * @return string vencedor do jogo
     */
    function showWiner(string $winner, array $players){
        if($winner == PLAYER_ONE_ICON){
            return "Parabens " . $players[0] . "você venceu! \n";
        }elseif($winner == PLAYER_TWO_ICON){
            return "Parabens " . $players[1] . "você venceu! \n";
        }else{
            return "EMPATE!!! \n";
        }
    }
?>