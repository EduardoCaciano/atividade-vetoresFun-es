<?php

$notaAlunos = [
    "Pedro" => 8,
    "Eduardo" => 10,
    "Cauã" => 10,
    "Anderson" => 9,
    "Sara" => 7,
    "Mariana" => 6,
    "Helena" => 10
];

function mediaAlunos (array $notas){
    $soma = 0;
    foreach($notas as $chave){
        if($chave > $soma){
            $soma = ($soma + $chave) / 7;
            return $soma;
        } else{
            echo "erro!!!";
        }
    }
        
}


print_r(mediaAlunos($notaAlunos));

// Não estou conseguindo somar todos os numeros só esta somando o primeiro o "PEDRO => 8";