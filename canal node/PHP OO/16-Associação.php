<?php

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereço;
}

$cliente = new Cliente();
$cliente->nome = 'Rodrigo oliveira';
$cliente->endereço = 'Rua xxx, Numero: 107';

$pedido = new Pedido();
$pedido->numero = '123';
$pedido->cliente = $cliente;

$dados = [
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereço_cliente' => $pedido->cliente->endereço
];

var_dump($dados);