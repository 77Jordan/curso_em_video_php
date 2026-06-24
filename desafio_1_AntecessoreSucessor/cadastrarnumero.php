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
        <?php
        $numero = $_GET["numero"];
        $antecessor = $_GET["numero"] - 1;
        $sucessor = $_GET["numero"] + 1;
        ?>
        <?php echo "O número digitado foi: "; ?> <strong><?php echo "$numero <br>"; ?></strong>
        <?php echo "O seu antecessor é: $antecessor <br>"; ?>
        <?php echo "O seu sucessor é: $sucessor <br>"; ?>


        <input type="submit" value="Voltar">



    </main>
</body>

</html>