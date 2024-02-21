<?php 

$nome = 'RODRIGO OLIVEIRA';
$novonome = strtolower($nome);
echo $novonome;

echo '<hr>';

$mensagem = 'ola, mundo';
echo substr($mensagem, 4, 4);

echo '<hr>';

$objeto = 'mouse';
$novoobjeto = str_pad($objeto, 7, '*', STR_PAD_LEFT);
echo $novoobjeto;

echo '<hr>';

$string = str_repeat('sucesso', 5);
echo $string;

echo "<hr>";

$men = 'Ola, Mundo!';
echo strlen($men);

echo '<hr>';

$texto = 'a seleçao argentina sera campeao da copa do mundo';
$novotexto = str_replace('argentina', 'brasileiara', $texto);
echo $novotexto;

echo '<hr>';

echo strpos($texto, 'copa');