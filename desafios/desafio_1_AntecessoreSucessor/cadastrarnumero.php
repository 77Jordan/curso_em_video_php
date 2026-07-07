<?php
$numero = $_GET["numero"];
$antecessor = $numero - 1;
$sucessor = $numero + 1;
?>

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
        <h1>Resultado final</h1>

        <p>
            <?php 
            echo "O número digitado foi: <strong>$numero</strong>";
            echo "<br>O seu antecessor é: $antecessor";
            echo "<br>O seu sucessor é: $sucessor";
            ?>
        </p>





        <button onclick="window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>

</body>

</html>