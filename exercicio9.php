<?php

function numeroPrimo (int $valor){
    $i = 0;
    if ($valor % $i == 0){
        echo "Numero não primo";
    } else {
        echo "numero primo";
    }
}

echo numeroPrimo(10);