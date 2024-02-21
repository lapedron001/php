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
        $nota5 = intdiv($valor1, 5) % 2;
        $nota10 = intdiv($valor1, 10) % 5;
        $nota50 = intdiv($valor1, 50) % 2;
        $nota100 = intdiv($valor1, 100);
    ?>
    <main>
        <h1>Caixa eletronica</h1>
        <form action="" method="get">
            <label for="v1">Qual valor voçe deseja sacar? (R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="5">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Saque de R$ <output><?= $valor1?></output> realizado</h2>
        <p>O caixa vai te entregar as seguintes notas: </p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt=""> x<?= $nota100 ?></li>
            <li><img src="imagens/50-reais.jpg" alt=""> x<?= $nota50 ?></li>
            <li><img src="imagens/10-reais.jpg" alt=""> x<?= $nota10 ?></li>
            <li><img src="imagens/5-reais.jpg" alt=""> x<?= $nota5 ?></li>
        </ul>
    </section>
</body>
</html>