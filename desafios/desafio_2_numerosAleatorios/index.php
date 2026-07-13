<?php
$valorMin = 0;
$valorMax = 100;
// random_int gera numeros aleatórios criptograficamente seguros
$numeroSorteado = random_int($valorMin, $valorMax);   

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Números aleatórios</title>
</head>

<body>
  <main>
    <h1>Trabalhando com números aleatórios</h1>

    <p>
      getando um número aleatório entre 0 e 100...<br>
      <?php echo "o valor gerado foi <strong>$numeroSorteado</strong>"; ?>
    </p>

    <button onclick="window.location.href = 'index.php'">
      &#x1F504; Gerar outro 
    </button>
  </main>
</body>

</html>