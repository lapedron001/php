<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultado</title>
</head>
<body>
    <main>
        <h1>Analisador de numero real</h1>
        <?php 
            $num = $_POST["num"] ?? 0;

            echo "<p>Analisando o numero <strong>" . number_format($num, 2, ",", ".") . " </strong>informado pelo usuario</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li>a parte inteira do numero é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";
            echo "<li>a parte fracionario do numero é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>"
        ?>
        <input type="button" value="voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>