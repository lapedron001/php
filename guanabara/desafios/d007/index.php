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
        <h1>informe seu salario</h1>
        <form action="" method="get">
            <label for="v1">salario (R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <p>Considerando o salario minimo de <strong>R$1.380.00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>resultado final</h2>
        <?php 
            $resto = $valor1 % 1380;
            $salario = intdiv($valor1, 1380);
            echo "<p>Quem recebe um salario de " . number_format($valor1, 2, ",", ".") .  " ganha <strong>$salario salarios minimos</strong> + " . number_format($resto, 2, ",", ".") . "</p>"
        ?>
    </section>
</body>
</html>