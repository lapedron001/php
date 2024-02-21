<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio 2</title>
</head>
<body>
    <section>
        <h1>Trabalhando com numeros aleatorios</h1>
        <p>gerando um numero aleatoria entre 0 e 100...</p>
        <?php 
            $num = rand(0, 100);
            echo "o valor gerado foi <strong> $num";
        ?>
        <a href="index.php"><input type="button" value="Gerar outro"></a>
    </section>
</body>
</html>