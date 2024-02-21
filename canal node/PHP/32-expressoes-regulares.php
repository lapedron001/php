<?php

//$string = 'contato@gmail.com';
//$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";
$string = "13/09/2018";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/i";

if(preg_match($padrao, $string)){
    echo 'Valido';
    echo "<hr>";
    echo $string;
} else{
    echo 'Inavalido';
    echo "<hr>";
}