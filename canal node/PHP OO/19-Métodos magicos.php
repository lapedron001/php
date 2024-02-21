<?php

class Pessoa{
    private $dados = [];

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __toString(){
        return 'Tentei imprimir o objeto';
    }

    public function __invoke(){
        return "Objeto com funçao";
    }
}
$pessoa = new Pessoa();
$pessoa->nome = 'ola';
$pessoa->idade = 50;
$pessoa->sexo = "M";

echo $pessoa();