<?php
    function Leitura(){
        $fp = fopen("file.txt", "r");
        $texto = fread($fp, filesize("file.txt"));
        fclose($fp);
        return str_replace("---", "<br>", $texto);
    }

    echo Leitura();
?>
