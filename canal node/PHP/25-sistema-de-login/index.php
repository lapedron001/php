<?php 
//conexão
require_once 'db_connect.php';

// sessão
session_start();
//botao enviar
if(isset($_POST['btn-entrar'])){
    $erros = [];
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)){
        $erros[] = "<li> O campo login/senha precisa ser prenchido</li>";
    } else{
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0){

            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1){
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            } else{
                $erros[] = '<li>usuaio e senha nao converem</li>';
            }

        } else{
            $erros[] = '<li>usuario inexistente</li>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <?php 
    if(!empty($erros)){
        foreach($erros as $erro){
            echo $erro;
        }
    }
    ?>
    <hr>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        login: <input type="text" name="login"><br>
        senha: <input type="password" name="senha"><br>
        <button type="submit" name="btn-entrar"> Entrar </button>
    </form>
</body>
</html>