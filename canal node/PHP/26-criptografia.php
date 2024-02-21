
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="senfds">senha:</label>
        <input type="text" name="sen" id="sen">
        <button type="submit" name="btn-enviar">enviar</button>
    </form>
</body>
</html>

<?php 
if(isset($_POST['btn-enviar'])){
$senha = $_POST['sen'];

// encripitando a senha
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

// verificação da senha
if (password_verify($senha, $senhaSegura)){
    echo 'Senha valida: '. $senhaSegura;
} else{
    echo 'Senha invalida: '. $senhaSegura;
}
}
?>