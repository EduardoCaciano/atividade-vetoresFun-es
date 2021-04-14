<?php

function menorMaior(array $vetor){
    $maior = $vetor[0];
    $menor = $vetor[1];

    foreach ($vetor as $numero){
        // maior
        if($numero > $maior){
            $maior = $maior;
        }else{
            $maior = $numero;
        }
        // menor
        if($numero < $menor){
            $menor = $menor;
        }else{
            $menor = $numero;
        }
    }

    $outroVetor[] = $menor;
    $outroVetor[] = $maior;

    return $outroVetor;
}

$numeros = [500, 1230, 1, 9985, 100];

print_r(menorMaior($numeros));