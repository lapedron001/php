<?php

$cor = 'vermelh0';

switch ($cor){
    case 'vermelho':
        echo 'sua cor preferida é o vermelho';
    break;
    case 'verde':
        echo 'sua cor preferida é o verde';
    break;
    case 'azul':
        echo 'sua cor preferida é azul';
    break;

    default:
    echo 'sua cor preferida nao é vermelho, verde ou azul';
    break;
}