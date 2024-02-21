<?php

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo 'Andou';
    }

    public function Parar(){
        echo 'Parou';
    }
}

class Carro extends Veiculo{ 
    public function ligarLimpador(){
        echo 'Limpando em 321';
    }
}

class Moto extends Veiculo{ 
    public function grau(){
        echo 'Dando grau em 321';
    }
}

$carro = new Carro();
$carro->modelo = 'Gol';
$carro->cor = 'Vermelho';
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();

$moto = new Moto();
$moto->modelo = 'Honda';
$moto->cor = 'Azul';
$moto->ano = 2018;
$moto->Parar();
echo "<br>";
$moto->grau();