<?php

class Newslatter {
    public function cadatrarEmail($email){

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é invalido", 121);
        } else {
            echo 'Email cadastaro com sucesso';
        }
    }
}

$newlater = new Newslatter();

try {
$newlater->cadatrarEmail('contato@');
} catch(Exception $e) {
    echo 'Mensagem: '. $e->getMessage(). "<br>";
    echo 'Codigo: '. $e->getCode(). "<br>";
    echo 'Linha: '. $e->getLine(). "<br>";
    echo 'Arquivo: '. $e->getFile(). "<br>";
}