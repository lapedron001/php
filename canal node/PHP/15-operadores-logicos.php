<?php 

// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 25;
$nome = 'rodrigo';

if (($idade == 24) and ($nome == 'rodrigo')){ //se os dois forem verdadeiro é verdadeiro
    echo 'é verdadeiro';
} else {
    echo 'é falso';
}

echo '<br>';

if (($idade == 24) || ($nome == 'rodrigo')){ //se um dos dois for verdadeiro é verdadeiro
    echo 'é verdadeiro';
} else {
    echo 'é falso';
}

echo '<br>';

if (($idade == 25) xor ($nome == 'rodrigo')){ //se os dois forem verdadeiro é falso
    echo 'é verdadeiro';
} else {
    echo 'é falso';
}

echo '<br>';

if (!($idade == 25) and ($nome == 'rodrigo')){ // inverte o estado logico da expressão
    echo 'é verdadeiro';
} else {
    echo 'é falso';
}