<?php
// Inicializa o cURL
$ch = curl_init();

// Define a URL da página de exemplo
$url = 'http://localhost/curso%20php/meus%20estudos/cURL/exemplo.php';

// Configura as opções do cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executa a requisição e obtém o conteúdo da página
$content = curl_exec($ch);

// Verifica se houve algum erro na requisição
if(curl_errno($ch)) {
    echo 'Erro ao fazer a requisição: ' . curl_error($ch);
} else {
    // Exibe o conteúdo da página
    echo $content;
}

// Fecha o recurso cURL
curl_close($ch);
?>
