<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio php</title>
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;

    ?>
    <main>
        <h1>reajustador de preço</h1>
        <form action="" method="get">
            <label for="v1">valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Qual sera o porcentual de reajuste? (<output name="out"><?= $valor2?></output>%)</label>
            <input type="range" name="v2" id="v2" min='1' max='100' value="<?=$valor2?>" oninput="javascript: out.innerHTML = v2.value">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>resultado do reajuste</h2>
        <?php 
            $porcen = (($valor1 * $valor2) / 100) + $valor1;
            echo "<p>O produto que custava R$" . number_format($valor1, 2, ",", ".") . ", com <strong>$valor2% de aumento</strong> vai passar a custar <strong>R$ " . number_format($porcen, 2, ",", ".") . "</strong></p>";
        ?>
    </section>
</body>
</html>