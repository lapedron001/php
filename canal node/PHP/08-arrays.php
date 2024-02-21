<?php
// Arrays numericos
$carros = [1=>'BMW', 2=>'Veloster', 3=>'Hilux'];
$carros[] = 'Amarok';
$carros[10] = 'Camaro';
echo $carros[10];
echo '<br>';

$motos = [];
$motos[] = 'yamarra';
$motos[] = 'Honda';
$motos[] = 'railuz';
$motos[5] = 'suzurra';
echo $motos[5];
echo '<hr>';

// count
echo count($carros);
echo '<br>';

$totalMotos = count($motos);
echo $totalMotos;
echo '<hr>';

// foreach
foreach($motos as $valor) {
    echo $valor . '<br>';
}
echo '<hr>';

// Array associativos
$pessoa = ['nome'=> 'rodrigo', 'idade'=> 23, 'altura'=> 1.75];
$pessoa['cidade'] = 'tabuna';

foreach($pessoa as $indice => $valor){
    echo $indice . ': ' . $valor . '<br>';
}
echo '<hr>';

// arrays multidimensionais
$times = ['cariocas'=> ['campeao'=> 'vasco','vice'=> 'flamengo','terceiro'=> 'botafogo'],
 'paulistas'=> ['campeao'=> 'santos','vice'=> 'sao paulo','terceiro'=> 'palmeiras'],
 'baianos'=> ['campeao'=> 'bahia','vice'=> 'vitoria','terceiro'=> 'tabuna']];
 echo $times['paulistas']['campeao'] . '<br>';

 foreach ($times['cariocas'] as $indice => $valor) {
    echo $indice . ': ' . $valor . '<br>';
 }
 foreach ($times['paulistas'] as $indice => $valor) {
    echo $indice . ': ' . $valor . '<br>';
 }
 foreach ($times['baianos'] as $indice => $valor) {
    echo $indice . ': ' . $valor . '<br>';
 }