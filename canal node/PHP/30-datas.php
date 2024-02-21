<?php
// Datas
date_default_timezone_set('America/Sao_Paulo');
//echo date('d/m/Y H:i:s');
//echo "<hr>";

$date = date('Y-m-d'); //DATE
$datetime = date('Y-m-d H:i:s'); //DATETIME
//echo $datetime;

//time
$time = time();
//echo date('d/m/Y', $time);

//MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 12, 2026);
//echo date('d/m/Y - h:i', $data_pagamento);

// STRTOTIME
$data = '2019-05-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y', $data);