<?php

$vetorNomes = [
    "Cauã",
    "Anderson",
    "Eduardo",
    "Pedro"
    ];

function inverterVetor($reverte){

    for ($i = (count($reverte) - 1) ; $i >= 0 ; $i--){

        echo $reverte[$i] . " - ";
    }
}


echo inverterVetor($vetorNomes);
?>