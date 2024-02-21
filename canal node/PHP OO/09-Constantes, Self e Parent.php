<?php

class Pessoa {
    const nome = "rodrigo";

    public function exibirNome(){
        echo self::nome;
    }
}

class rodrigo extends Pessoa{
    const nome = "Oliveira";

    public function exibirNome(){
        echo parent::nome;
    }
}

$rodrigo = new rodrigo();
$rodrigo->exibirNome();