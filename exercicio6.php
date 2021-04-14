<?php

function retornaChave(array $vetor){
    foreach($vetor as $chave => $i){
        $outroVetor[] = $chave;
    }
    return $outroVetor;
}

$listaCarros = [
    "Ferrari" => 1,
    "Lamborghini" => 2,
    "Porshe" => 3,
    "Fusca" => 4,
    "Maréa" => 5,
    "Omega" => 6
];

print_r(retornaChave($listaCarros));