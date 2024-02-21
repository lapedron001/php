<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_POST['enviar-formulario'])){
            // array de erros
            $erros = [];
            
            // os dois juntos
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($idade, FILTER_VALIDATE_INT)){
                $erros[] = 'idade precisa ser um inteiro';
            }

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erros[] = 'email invalido';
            }

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)){
                $erros[] = 'url invalida';
            }

            // mensagens
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo "<li>$erro</li>";
                }
            } else{
                echo 'parabens, seus dados estao corretos!';
            }
        }
    ?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        Nome: <input type="text" name="nome" id=""> <br>
        idade: <input type="text" name="idade" id=""> <br>
        Email: <input type="text" name="email" id=""> <br>
        URL: <input type="text" name="url" id=""> <br>
        <button type="submit" name="enviar-formulario"> Enviar </button>
    </form>
</body>
</html>