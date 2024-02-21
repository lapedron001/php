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
        <h1>calculadora de tempo</h1>
        <form action="" method="get">
            <label for="v1">Qual é o total de tempos em segundos?</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php 
            $s = $valor1 % 60;
            $m = intdiv($valor1, 60) % 60;
            $h = intdiv($valor1, 3600) % 24;
            $d = intdiv($valor1, 86400) % 7;
            $se = intdiv($valor1, 604800) % 30;

            echo "<p>Analisando o valor que voce digitou, <strong>$valor1 segundos</strong> equivalem a um total de:</p>";
            echo "<ul><li>$se semanas</li><li>$d dias</li><li>$h horas</li><li>$m minutos</li><li>$s segundos</li></ul>";
        ?>
    </section>
</body>
</html>