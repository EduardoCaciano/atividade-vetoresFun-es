<?php

$vetorNomes = [
"Cauã",
"Anderson",
"Eduardo",
"Pedro"
];

$procuraNome = "Eduardo";

function localizaNome(array $nomes, $nomeDoVetor){
  foreach($nomes as $nome){
      if($nome == $nomeDoVetor){
        return true;
      }
  } return false; 
}   

if(localizaNome($vetorNomes, $procuraNome)){
  echo "$procuraNome está na lista";
}else{
  echo "$procuraNome não está na lista";
}
?>

