<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot Rubi IA</title>
    <link rel="stylesheet" href="css2/style.css">
</head>

<body>
    <div class="container">
       
            <div class="chatbox">
                    <div class="header">
                        <h4> <img src='img/perfil.jpg' class='imgRedonda'/> Rubi.IA </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">Hola! soy Rubi IA asistente virtual de la Clinica Dental Innovacion, Estoy para responder preguntas relacionados con los servicios de la Clinica Dental. Espero poder ayudarte.</p>
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Preguntale algo" style=" font-family: cursive; font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                </div>
                    </form>

            <input type=button class="creador" value="Creadores" onClick="mi_alerta()">
        </div>
    </div>
    
    <script src="app.js"></script>
    
            <SCRIPT LANGUAGE="JavaScript">
        function mi_alerta () {
        alert ("Tutoriales"+
               "\n"+
               "\nCaleb & Mr. Luna");
        }
        </SCRIPT>
        
</body>

</html>