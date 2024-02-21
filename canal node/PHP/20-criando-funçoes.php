<?php 

function exibirNome($nome){
    echo "meu nome é $nome";
}

exibirNome('rodrigo');

echo '<hr>';

function media($nome, $n1, $n2, $n3, $n4){
    $mediaa = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($mediaa >= 7){
        echo "$nome foi aprovado com a media $mediaa";
    } else{
        echo "$nome foi reprovado";
    }
}

media('pedro', 10,5,6,7);