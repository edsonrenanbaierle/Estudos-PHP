<?php

    do{
        $playerOne = readline('Player 1(x) digite o seu nome: ');
        $playerTwo = readline('Player 2(o) digite o seu nome:');

        $player = 'x';//jogador da vez

        //tabuleiro
        $board = [
            '.', '.', '.',
            '.', '.', '.',
            '.', '.', '.'
        ];

        $winner = null;//verificador se alguem ganhou/sair do lopp

        while($winner === null){
            echo <<<EOL
                
                Posições: | Tabuleiro
                          |
                  0|1|2   |     $board[0]|$board[1]|$board[2]    
                  3|4|5   |     $board[3]|$board[4]|$board[5] 
                  6|7|8   |     $board[6]|$board[7]|$board[8] 

            EOL
            ;

            $position = (int) readline("\nPlayer $player, pro favor digite a posição desejada: ");

            //verifica se a posicao digitada é de 0 a 8
            if(!in_array($position, [0, 1, 2, 3, 4, 5, 6, 7, 8])){
                echo "Por Favor, digite uma posição entre 0 e 8";
                continue;//faz retornar para parte de cima do while
            }

            //verifica se a posição no qual foi digitada contem o .  se nao conter quer dizer que já foi preenchida
            if(!$board[$position] == '.'){
                echo "Posição já preenchida com $board[$postion], por favor digite uma posição valida!";
                continue;
            }

            //guarda o valor na posição
            $board[$position] = $player;

            //verifica se x ganhou
            if(
                ($board[0] === "x" && $board[1] === "x" && $board[2] === "x") ||
                ($board[3] === "x" && $board[4] === "x" && $board[5] === "x") ||
                ($board[6] === "x" && $board[7] === "x" && $board[8] === "x") ||
                ($board[0] === "x" && $board[3] === "x" && $board[6] === "x") ||
                ($board[1] === "x" && $board[4] === "x" && $board[7] === "x") ||
                ($board[2] === "x" && $board[5] === "x" && $board[8] === "x") ||
                ($board[0] === "x" && $board[4] === "x" && $board[8] === "x") ||
                ($board[2] === "x" && $board[4] === "x" && $board[6] === "x")
            ){
                $winner = 'x';  
            }

            //verifica se o ganhou
            if(
                ($board[0] === "o" && $board[1] === "o" && $board[2] === "o") ||
                ($board[3] === "o" && $board[4] === "o" && $board[5] === "o") ||
                ($board[6] === "o" && $board[7] === "o" && $board[8] === "o") ||
                ($board[0] === "o" && $board[3] === "o" && $board[6] === "o") ||
                ($board[1] === "o" && $board[4] === "o" && $board[7] === "o") ||
                ($board[2] === "o" && $board[5] === "o" && $board[8] === "o") ||
                ($board[0] === "o" && $board[4] === "o" && $board[8] === "o") ||
                ($board[2] === "o" && $board[4] === "o" && $board[6] === "o")
            ){
                $winner = 'o';  
            }

            //verrifica se o array ainda tem uma posição livre
            if(!in_array(".", $board)){
                break;
            }

            //faz a troca de jogador ao final
            if($player === "x"){
                $player = "o";
            }else{
                $player = "x";
            }

        }

        //se chegou aqui alguem ganhou ou deu empate

        //exibição do board
        echo <<<EOL
                
                Posições: | Tabuleiro
                          |
                  0|1|2   |     $board[0]|$board[1]|$board[2]    
                  3|4|5   |     $board[3]|$board[4]|$board[5] 
                  6|7|8   |     $board[6]|$board[7]|$board[8] 

            EOL
            ;

        //printa na tela o ganhador
        if($winner == "x"){
            echo "Parabens $playerOne você venceu! \n";
        }elseif($winner == "o"){
            echo "Parabens $playerTwo você venceu! \n";
        }else{
            echo "EMPATE!!! \n";
        }

        //filtra um valor bolleano.
        $playAgain = filter_var(
            readline("Deseja jogar novamente (true/false):"),
            FILTER_VALIDATE_BOOL
        );

        echo "\n";

    }while($playAgain === true);
?>