<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resposta</title>
</head>
<body>
    <section>
        <h1 style="font-size: 2em;">Resultado final</h1>
        <?php 
            $num = $_GET["num"];
            $ant = $num - 1; 
            $suc = $num + 1;
            echo "<p> O numero escolhido foi <strong>$num</strong> </p>";
            echo "<p> O seu antecessor é $ant </p>";
            echo "<p> O seu sucessor é $suc </p>";
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="voltar" ></a>
    </section>
</body>
</html>