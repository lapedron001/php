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
    ?>
    <main>
        <h1>informe um numero</h1>
        <form action="" method="get">
            <label for="v1">numero</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <input type="submit" value="Calcular raizes">
        </form>
    </main>

    <section id="resultado">
        <h2>resultado final</h2>
        <?php 
            $raiz2 = $valor1 ** (1/2);
            $raiz3 = $valor1 ** (1/3);
            echo "<p>Analisando o <strong>numero $valor1</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($raiz2, 3, ",", ".") . "</strong></li><li>A sua raiz cubica é <strong>" . number_format($raiz3, 3, ",", ".") . "</strong></li></ul>";
        ?>
    </section>
</body>
</html>