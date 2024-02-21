<?php

class Produtos {
    public $name;
    public $valor;

    function __construct($name, $valor){
        $this->name = $name;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach($this->produtos as $Produto){
            echo $Produto->name. "<br>";
            echo $Produto->valor. "<hr>";
        }
    }
}

$produto1 = new Produtos('Notebook', "1500");
$produto2 = new Produtos('Mouse', "50");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();