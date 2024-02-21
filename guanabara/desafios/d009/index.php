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
        $peso1 = $_GET["p1"] ?? 1;
        $peso2 = $_GET["p2"] ?? 1;

    ?>
    <main>
        <h1>medias</h1>
        <form action="" method="get">
            <label for="v1">valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" min="1">
            <label for="p1">peso 1</label>
            <input type="number" name="p1" id="p1" value="<?=$peso1?>" min="1">
            <label for="v2">valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>" min="1">
            <label for="p2">peso 2</label>
            <input type="number" name="p2" id="p2" value="<?=$peso2?>" min="1">
            <input type="submit" value="Calcular medias">
        </form>
    </main>

    <section id="resultado">
        <h2>Calculo de medias</h2>
        <?php 
            $media = ($valor1 + $valor2) / 2;
            $pon = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            echo "<p>Analisando os valores $valor1 e $valor2</p>";
            echo "<ul><li>A <strong>Media Aritmetica Simples</strong> entre os valores é igual a " . number_format($media, 2, ",", ".") . "</li><li>A <strong>Media Aritmetica Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($pon, 2, ",", ".") . "</li></ul>";
        ?>
    </section>
</body>
</html>