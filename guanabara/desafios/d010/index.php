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
        $valor1 = $_GET["v1"] ?? 1990;
        $valor2 = $_GET["v2"] ?? date("Y");

    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="" method="get">
            <label for="v1">Em que ano voce nasceu?</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" min="1900" max="<?=date("Y") - 1?>">
            <label for="v2">Quer saber sua idade em que ano (atualmente estamos em <?php echo date("Y") ?>)</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>" min="1900"?>
            <input type="submit" value="Qual sera minha idade?" onclick="<?php ?>">
        </form>
    </main>

    <section id="resultado">
        <h2>resultado</h2>
        <?php 
            $ano = abs($valor1 - $valor2);
            echo "<p>Quem nasceu em $valor1 vai ter <strong>$ano anos</strong> em $valor2</p>";
        ?>
    </section>
</body>
</html>