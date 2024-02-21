<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 3</title>
</head>
<body>
    <main>
    <h1>coversor de moedas v1.0</h1>
        <?php
     $cotação = 5.17;
     $real = $_GET["din"] ?? 0;
     $dolar = $real / $cotação;
     $padrao = numfmt_create("PT-BR", NumberFormatter::CURRENCY);
     echo "seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="voltar" ></a>
    </main>
</body>
</html>