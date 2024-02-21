<?php
// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados enviados no corpo da requisição
    $data = json_decode(file_get_contents("php://input"), true);

    // Verifica se os dados foram recebidos corretamente
    if (isset($data['username']) && isset($data['password'])) {
        // Aqui você pode fazer o processamento da autenticação com os dados recebidos

        // Por exemplo, vamos apenas retornar os dados recebidos para confirmar que a autenticação foi bem-sucedida
        $response = [
            'status' => 'success',
            'message' => 'Autenticação bem-sucedida!',
            'username' => $data['username'],
            'password' => $data['password']
        ];

        // Define o cabeçalho de resposta como JSON
        header('Content-Type: application/json');

        // Retorna a resposta como JSON
        echo json_encode($response);
    } else {
        // Se os dados não foram recebidos corretamente, retorna um erro
        http_response_code(400); // Bad Request
        echo json_encode(['error' => 'Dados de autenticação ausentes']);
    }
} else {
    // Se a requisição não for do tipo POST, retorna um erro
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Método não permitido']);
}
?>
