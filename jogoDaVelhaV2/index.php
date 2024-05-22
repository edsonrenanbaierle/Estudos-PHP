<?php
    require_once __DIR__ . '/constante.php';
    require_once __DIR__ . '/variable.php';
    require_once __DIR__ . '/getPlayersName.php';
    require_once __DIR__ . '/buildBoard.php';
    require_once __DIR__ . '/showBoard.php';
    require_once __DIR__ . '/isPositionCorrect.php';
    require_once __DIR__ . '/validate.php';
    require_once __DIR__ . '/isBoardFull.php';
    require_once __DIR__ . '/swapPlayer.php';
    require_once __DIR__ . '/showWInner.php';
    require_once __DIR__ . '/playAgain.php';


    do{
        $players = getPlayersName();

        $player = PLAYER_ONE_ICON;//jogador da vez

        //tabuleiro criação 
        $board = buildBoard();

        $winner = null;//verificador se alguem ganhou/sair do lopp

        while($winner === null){
            echo showBoard($board);

            $position = (int) readline("\nPlayer $player, pro favor digite a posição desejada: ");

            if(!isPositionCorrect($position, $board)){
                continue;
            }

            //guarda o valor na posição
            $board[$position] = $player;

            //verifica se alguem ganhou
            if(validate($board, PLAYER_ONE_ICON)){
                $winner = PLAYER_ONE_ICON;  
            }elseif(validate($board, PLAYER_TWO_ICON)){
                $winner = PLAYER_TWO_ICON; 
            }else{
                $winner = null;
            }



            //verrifica se o array ainda tem uma posição livre
            if(isBoardFull($board)){
                break;
            }

            //faz a troca de jogador ao final
            $player = swapPlayer($player);

        }

        //se chegou aqui alguem ganhou ou deu empate

        //exibição do board
        echo showBoard($board);

        //printa na tela o ganhador
        echo showWiner($winner, $players);

        //filtra um valor bolleano.
        $playAgain = playAgain();

        echo "\n";

    }while($playAgain === true);
?>