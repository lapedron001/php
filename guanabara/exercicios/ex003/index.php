<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //$n = 010;
        //$v = 3e2;

        //echo "O valor da variavel é ";
        //var_dump($v)

        //$num = (int) "950";
        //var_dump($num);

        //$casado = true;
        //echo "O valor para casado é $casado"

        //$vet = [6, 7, 8, 9, "Maria"];
        //var_dump($vet);

        class pessoa {
            private string $nome;
        }

        $p = new pessoa;
        var_dump($p)
    ?>
</body>
</html>