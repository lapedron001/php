<?php
require 'classes/produto.php';
require 'models/produto.php';

//use models\Produto as productModel;
//use classes\Produto as productClass;
//use classes\Produto;
//use models\Produto;

$produto = new \classes\Produto(); // class dentro dos arquivos
$produto->mostrarDetalhes(); // metodo dentro dos arquivos