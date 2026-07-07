<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <?php
        $numero = $_GET["numero"];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        ?>

        <form action="index.html" method="get">
            <h1>Resultado final</h1>

            <p>O número digitado foi: <strong> <?= $numero ?></strong></p>
            <p>O seu antecessor é: <?= $antecessor ?></p>
            <p>O seu sucessor é: <?= $sucessor ?> </p>

            <input type="submit" value="Voltar">
        </form>
    </main>

</body>

</html>