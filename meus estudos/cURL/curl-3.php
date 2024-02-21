<?php
$ch = curl_init();

// URL do recurso protegido
$url = 'https://reqres.in/api';

// Configuração do cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Configuração da autenticação básica
$username = 'seu_usuario';
$password = 'sua_senha';
$credentials = $username . ':' . $password;
$base64Credentials = base64_encode($credentials);
$authHeader = 'Authorization: Basic ' . $base64Credentials;
curl_setopt($ch, CURLOPT_HTTPHEADER, array($authHeader));

// Executar a solicitação
$response = curl_exec($ch);

// Verificar por erros
if(curl_errno($ch)) {
    echo 'Erro cURL: ' . curl_error($ch);
} else {
    // Manipular a resposta
    echo $response;
}

// Fechar a sessão cURL
curl_close($ch);
?>
