<?php

$vetA = [1,2,3,4,5,6];
$vetB = [1,4, 1];

function teste (array $vetA, array $vetB){    
    if (count($vetA) > count($vetB)){
        foreach($vetA as $valoresA){
            foreach($vetB as $a => $valoresB){
                if($valoresA == $valoresB){
                    unset($vetB[$a]);
                    if(count($vetB) == 0){
                        return true;
                    }  
                }
            }
        }
    }else{
    return false;
    }
}

echo(teste($vetA,$vetB));