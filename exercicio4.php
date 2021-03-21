<?php

    $valores = [16, 21, 26, 40, 45, 58];
    $apagar = 26;

// function deletaNumero(array $numeros, $valor) {

//         for($i = 1; $i <= count($numeros); $i++ ){
//             if($numeros[$i] == $valor){
//                 unset($numeros[$i]);
//                 return $numeros;
//             }
//         } return false;
//     }

//     print_r(deletaNumero($valores, $apagar));

    function deletaNumero(array $vetor, $apagar){
        foreach($vetor as $numero => $el){

            if($el == $apagar){

                unset($vetor[$numero]);

                return $vetor;
            }
        } return false;
    }

  $novoVetor = deletaNumero($valores, $apagar);

  print_r($novoVetor);
?>