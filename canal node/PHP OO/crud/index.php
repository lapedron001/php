<?php
require_once 'vendor/autoload.php';

$produto = new \App\model\Produto;
$produto->setId('3');
$produto->setNome('Cadeira gamer');
$produto->setDescricao('condesa, 4gb');

$produtoDao = new \App\model\ProdutoDao();
$produtoDao->delete(4);
$produtoDao->read();

foreach($produtoDao->read() as $produto){ 
    echo $produto['nome']. "<br>" . $produto['descricao']. "<hr>";
}
