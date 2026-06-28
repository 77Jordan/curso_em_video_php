<?php
$numero = $_GET["numeroreal"]; // Obtém o número real informado pelo usuário, ou 0 se não for fornecido
$inteiro = (int)$numero; // Converte o número para inteiro  
$decimal = $numero - $inteiro;
$numeroFormatado = number_format($numero, 3, ',', '.'); // Formata o número com 2 casas decimais
$decimalformatado = number_format($decimal, 3, ',', '.'); // Formata a parte decimal com 2 casas decimais
?>


<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 5 - Analisador de Número Real</title>
</head>

<body>
    <main>
        <h1>Analisador de Números Reais</h1>
        <p>Analisando o Número <strong><?= $numeroFormatado ?></strong> informado pelo usuário: </p>
        <ul>
            <li>A parte inteira do número é <strong><?= $inteiro ?></strong> </li>
            <li>A parte fracionária do número é <strong><?= $decimalformatado ?></strong> </li> 
        </ul>
        <button onclick="window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>