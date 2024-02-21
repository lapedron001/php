<?php

class Pessoa {
    public function atibuiNome($nome){
        return "O nome da pessoa é $nome";
    }
}

class exibi {
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome() {
        echo $this->pessoa->atibuiNome($this->nome);
    }
}

$exibe = new exibi('pedro');
$exibe->exibeNome();