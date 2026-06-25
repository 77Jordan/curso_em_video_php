<?php
$reais = $_GET["reais"];
$dolar = $reais / 5.20;
$dolarFormatado = number_format($dolar, 2, ',', '.');
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
        <h1>Conversor de Moedas v1.0</h1>
        <p>Seus R$ <?= $reais ?> equivalem a <strong>US$ <?= $dolarFormatado ?></strong>


        </p>
        <br>
        <span><strong>*Cotação fixa de R$5,20</strong> informada diretamente no código</span>
        <br><br>
        <button onclick="window.location.href='index.html'">Voltar</button>
    </main>

</body>

</html>