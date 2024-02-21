<?php 

$db = 1234.56;
$preço = number_format($db, 2, ',', '.');
echo "o valor do produto é $preço";

echo '<hr>';

echo rand(1,20);