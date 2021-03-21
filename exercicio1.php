<?php

 function somarInteiros(array $vetorInteiros){
    $soma = 0;

    foreach($vetorInteiros as $numero){
      //$soma = $soma + $numero; ou
        $soma += $numero;
    }

    return $soma;
 } 

 $inteiros = [10, 50, 90];

 echo somarInteiros($inteiros);

?>