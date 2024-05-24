<?php
    /**
     * @param array
     * @return array filtrado
     */

    function returnArrayFilter($value){
        if($value != "." && $value != ".."){
            return $value;
        }else{
            return false;
        }
    }
?>