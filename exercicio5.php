<?php

// essa lista pode vir de um banco de dados
$listaCidades = [
1 =>  "Jandira",
2 => "Itapevi",
3 => "Barueri", 
4 => "Osasco", 
5 => "Cotia", 
6 => "Santana de Parnaíba", 
7 => "Carapicuíba", 
8 => "São Paulo",
];

$nome = $_POST["nome"];
$cidade = $_POST["cidades"];

echo "Olá " . $nome . ", de " . $listaCidades[$cidade] . ", seja bem-vindo.";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css" />
    <title>Document</title>
</head>
<body>
    <!-- Formulario -->

    <form  method="POST" action="exercicio5.php">
        <h1>Exercício 5</h1>
        <div class="input-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome. ex: Eduardo Caciano" required/>
        </div>

        <div class="input-group">
            <label for="cidades">Cidade:</label>
            <select id="cidades" autofocus name="cidades" required>

                <?php
                    for($i=1; $i <= count($listaCidades); $i++){
                ?>
                <option value="<?=$i?>"><?=$listaCidades[$i]?></option>
                    <?php
                        }
                    ?>
            </select>
        </div>

        <button>Calcular</button>
    </form>
    
    <div class="input-group">
        <h1>Olá <?php $nome ?>, de <?php $listaCidades[$cidade] ?>, seja bem-vindo.(não sei porque, mas não consigo exibir aqui, só no echo)</h1>
    </div>
    
</body>
</html>