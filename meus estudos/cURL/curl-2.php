<?php
// Dados de autenticação
$username = 'lapedron';
$password = '56454645';

// Inicialização do cURL
$ch = curl_init();

// URL da página de autenticação
$url = 'http://localhost/curso%20php/meus%20estudos/cURL/autenticacao.php';

$data = json_encode([
    'username' => $username,
    'password' => $password
]);

// Opções do cURL
$options = [
    CURLOPT_URL => $url,                           // URL da requisição
    CURLOPT_RETURNTRANSFER => true,                // Retornar a resposta como uma string
    CURLOPT_POST => true,                           // Configura a requisição como POST
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => [                 // Cabeçalhos HTTP
        'Content-Type: application/json',   // Indicando que os dados são JSON
        'Content-Length: ' . strlen($data)  // Tamanho dos dados
    ]
];

// Definição das opções cURL
curl_setopt_array($ch, $options);

// Execução da requisição cURL
$response = curl_exec($ch);

// Verificação de erros
if (curl_errno($ch)) {
    echo 'Erro ao fazer a requisição: ' . curl_error($ch);
} else {
    // Exibição da resposta da API
    echo 'Resposta da API: ' . $response;
}

// Fechamento do recurso cURL
curl_close($ch);
?>
