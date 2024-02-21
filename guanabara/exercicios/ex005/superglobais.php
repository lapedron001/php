<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exercicio php</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "segunda", time() + 3600);

                session_start();
                $_SESSION["teste"] = "funcionou";

                echo "<h1>superglobal get</h1>";
                var_dump($_GET);

                echo "<h1>superglobal post</h1>";
                var_dump($_POST);

                echo "<h1>superglobal request</h1>";
                var_dump($_REQUEST);

                echo "<h1>superglobal cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>superglobal session</h1>";
                var_dump($_SESSION);

                echo "<h1>superglobal env</h1>";
                var_dump($_ENV);
                //foreach(getenv() as $c => $v) {
                //    echo "$c -> $v <br>";
                //}

                echo "<h1>superglobal server</h1>";
                var_dump($_SERVER);

                echo "<h1>superglobal globals</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>