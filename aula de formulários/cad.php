<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
    <?php 
     $nome = $_GET["nome"] ?? "Nome desconhecido";
     $sobrenome = $_GET["sobrenome"] ?? "Sobrenome desconhecido";
     echo "<p>olá <strong>$nome $sobrenome</strong>! seja bem vindo ao meu mundo";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>