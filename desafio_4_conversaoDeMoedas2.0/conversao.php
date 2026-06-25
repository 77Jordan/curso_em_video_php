<?php
$reais = $_GET["reais"] ?? 0;

$api = file_get_contents("https://economia.awesomeapi.com.br/json/last/USD-BRL");
$dados = json_decode($api, true);

$cotacao = $dados['USDBRL']['bid'];

$dolares = $reais / $cotacao;

$realFormatado = number_format($reais, 2, ',', '.');
$dolarFormatado = number_format($dolares, 2, '.', ',');
$cotacaoFormatada = number_format($cotacao, 2, ',', '.');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Moeda convertida</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <p>
            Seus R$ <?= $realFormatado ?> equivalem a
            <strong>US$ <?= $dolarFormatado ?></strong>
        </p>
        <br>
        <span>
            <strong>Cotação atual: R$ <?= $cotacaoFormatada ?> obtida diretamente do Banco Central do Brasil</strong>
            
        </span>
        <br><br>
        <button onclick="window.location.href='index.html'">
            Voltar
        </button>
    </main>
</body>

</html>