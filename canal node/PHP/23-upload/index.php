<html>
<body>
<pre>
<?php 
    if(isset($_POST['enviar-formulario'])){
        $formatosPermitidos = ['png', 'jpg', 'gif', 'jpeg'];
        $qunatidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;

        while ($contador < $qunatidadeArquivos){
        
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
        
        if(in_array($extensao, $formatosPermitidos)){
            $pasta = 'arquivos/';
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            $novonome = uniqid().".$extensao";

            if(move_uploaded_file($temporario, $pasta.$novonome)){
                echo "<img src='$pasta$novonome' alt='Imagem $contador' width='400px'><br>";
                echo "Upload feito com sucesso para $pasta.$novonome <br>";
            } else {
                echo "Erro ao enviar o arquivo $temporario";
            }
        } else {
            echo "$extensao nao é premitida <br>";
        }
        $contador++;
    }
    }
?>
</pre>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple><br>
        <input type="submit" name="enviar-formulario">
    </form>
</body>
</html>