<?php
header('Content-Type: application/json');

// Función para simular una respuesta del bot
function getBotReply($userMessage) {
    // Lógica para generar una respuesta del bot
    return "¡Gracias por tu mensaje!";
}

// Verifica si se recibió un mensaje del usuario
if (isset($_POST['message'])) {
    $userMessage = trim($_POST['message']);
    $reply = getBotReply($userMessage);

    // Devuelve la respuesta en formato JSON
    echo json_encode(['reply' => $reply]);
} else {
    echo json_encode(['reply' => 'No se recibió ningún mensaje.']);
}
?>
