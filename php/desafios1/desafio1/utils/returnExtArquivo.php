<?php 

    /**
     * @param string $dados = string dos dados do arquivo
     * @return retorna a extensao do arquivo: png, jpg
     */

    function extArquivo(string $dados){
        $regex = '/\/(.*?);/'; //regex para pegar do / até o ;
        preg_match_all($regex, $dados, $resultado); //delve um array bidimensional
        return $resultado[1][0];//retorna a posição desejada
    }
?>