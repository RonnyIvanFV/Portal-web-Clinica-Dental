<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventana de Chat</title>
    <link rel="stylesheet" href="chatestilo.css">
</head>
<body>
    <div class="chat-container">
        <div class="chat-box" id="chat-box">
            <!-- Mensajes se mostrarán aquí -->
            
            
                                    
                    
        </div>
        <div class="input-container">
            <input type="text" id="message-input" placeholder="Escribe un mensaje...">
            <button onclick="sendMessage()">Enviar</button>
        </div>
    </div>

    <script>
        function sendMessage() {
            const input = document.getElementById('message-input');
            const message = input.value.trim();
            if (message) {
                const chatBox = document.getElementById('chat-box');
                const userMessage = document.createElement('div');
                userMessage.className = 'message user';
                userMessage.textContent = message;
                chatBox.appendChild(userMessage);
                input.value = '';

                // Enviar mensaje al servidor
                fetch('chat11.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: new URLSearchParams({ message: message })
                })
                .then(response => response.json())
                .then(data => {
                    const botMessage = document.createElement('div');
                    botMessage.className = 'message bot';
                    botMessage.textContent = data.reply;
                    chatBox.appendChild(botMessage);
                    chatBox.scrollTop = chatBox.scrollHeight;
                })
                .catch(error => console.error('Error:', error));
            }
        }
    </script>
</body>
</html>
