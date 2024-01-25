<style>
    .chatbot-container {
        position: fixed;
        /* bottom: 20px;
    right: 20px; */
        width: 300px;
        border: 1px solid blue;
        border-radius: 10px;
    }

    .chatbot-header {
        background-color: #3498db;
        color: #fff;
        padding: 10px;
        border-radius: 10px;
        text-align: center;
    }

    .chatbot-questions {
        text-align: center;
        margin-top: 10px;

    }

    .btn-question {
        display: block;
        padding: 3px;
        margin: 10px 5px 0 5px;
        text-align: center;
        border: 1px solid #ccc;
        background-color: #f4f4f4;
        cursor: pointer;
    }

    .chatbot-messages {
        margin: 2% 1% 1% 1%;
        padding: 4px;
        border-top: #3498db solid 1px;
    }

    .question-message {
        /* padding: 2px; */
        text-align: center;
    }

    .user-message {
        padding: 2px;
    }

    .chatbot-message {
        /* text-align: center; */
        margin-bottom: 8px;
    }

    /*button gpt */
    :root {
        --background: #2C2C2C;
    }

    .button {
        margin: 10px 0 10px 20%;
        color: black;
        cursor: pointer;
        font-size: 0.7rem;
        line-height: 1.1rem;
        max-width: 160px;
        width: 100%;
        letter-spacing: 0.2rem;
        font-weight: 600;
        position: relative;
        text-decoration: none;
        text-transform: uppercase;
        display: flex;
        justify-content: center;
        transition: all 1s ease-in;
    }

    .button:hover {
        color: #FF9950;
    }

    .button svg {
        height: 40px;
        left: 0;
        top: 0;
        position: absolute;
        width: 100%;
    }

    .button rect {
        fill: none;
        stroke: #104c64;
        stroke-width: 2;
        stroke-dasharray: 450, 0;
        transition: all 0.5s linear;
    }

    .button:hover rect {
        stroke-width: 5;
        stroke-dasharray: 20, 300;
        stroke-dashoffset: 48;
        stroke: #FF9950;
        transition: all 2s cubic-bezier(0.22, 1, 0.25, 1);
    }
</style>
<!-- Contenedor del chatbot -->
<div class="chatbot-container" id="chatbot-container">
    <div class="chatbot-header" id="chatbot-header">Centro de ayuda</div>

    <div class="chatbot-questions">
        <button class="btn-question" id="response1">
            Esta es la primera preguntas, no se que tan largo sera asi que distribuire las preguntas con diferentes longitudes
        </button>
        <button class="btn-question" id="response2">¿Cuáles son los productos disponibles, tiempo de entre?</button>
        <button class="btn-question" id="response3">¿tiempo para solicitud, informacion del archivo?</button>
        <button class="btn-question" id="response4">¿Cuáles son los documentos disponibles en el archivo?</button>
        <button class="btn-question" id="">¿Que hace en ciertos casos?</button>
        <button class="btn-question" id="">¿por que todo esta en el archivo?</button>
        <a class="button chat-gpt-embebido" href="chat-gpt-embebido">
            <svg>
                <rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
            </svg>
            Tienes mas dudas?
        </a>
    </div>

    <div class="chatbot-messages" id="chatbot-messages"></div>
    <!-- <button id="send-button">Enviar</button> -->
    <!-- <button class="btn-hover color-9"  id="send-button">Enviar</button> -->
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        const chatbotMessages = $('#chatbot-messages');
        // Preguntas y respuestas predeterminadas
        const qaPairs = [{
                question: '¿Cuáles son los productos disponibles?',
                answer: 'Tenemos una variedad de productos, ¿hay algo específico que estás buscando?'
            },
            {
                question: '¿Cuál es el tiempo de envío?',
                answer: 'El tiempo de envío depende de tu ubicación. Puedes consultar más detalles en nuestra sección de envíos.'
            },
            {
                question: 'pregunta numero 3 para resolver dudas?',
                answer: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, nam veniam dignissimos rem eligendi tempora iusto voluptatibus perferendis vitae enim optio hic, eos quo voluptas laborum fugiat voluptatum saepe. Expedita?'
            },
            {
                question: 'pregunta numero 4 para resolver dudas?',
                answer: 'respuesta numero 4, las respuestas relacionadas al archivo y dudas.'
            },
            {
                question: 'pregunta numero 5 para resolver dudas?',
                answer: 'Respuesta bien elaborada para la pregunta 5'
            },
            // Agrega más pares de preguntas y respuestas según sea necesario
        ];

        // Función para mostrar mensajes del chatbot
        function showMessage(message, question, isUser = false) {
            console.log(message, question, isUser);
            const questionElement = $('<h4></h4>').addClass(isUser ? 'question-message' : 'chatbot-message').text(question);
            const messageElement = $('<div></div>').addClass(isUser ? 'user-message' : 'chatbot-message').text(message);
            chatbotMessages.append(questionElement);
            chatbotMessages.append(messageElement);
        }
        // Función para manejar la entrada del usuario
        function handleUserInput(userMessage) {
            if (userMessage !== '') {
                //console.log(userMessage)
                showMessage(null, userMessage, isUser = true);
                handleChatbotResponse(userMessage);
            }
        }
        // Función para manejar las respuestas del chatbot
        function handleChatbotResponse(userMessage) {
            for (const qaPair of qaPairs) {
                const normalizedQuestion = qaPair.question.toLowerCase();
                if (userMessage.toLowerCase().includes(normalizedQuestion)) {
                    showMessage(qaPair.answer);
                    return;
                }
            }
            showMessage('Lo siento, no entendí la pregunta. ¿Puedes reformularla?');
        }
        // Evento al hacer clic en el botón de enviar
        $("#response1").click(function() {
            $("#chatbot-messages").empty();
            handleUserInput(qaPairs[0].question)
        })
        $("#response2").click(function() {
            $("#chatbot-messages").empty();
            handleUserInput(qaPairs[1].question)
        })
        $("#response3").click(function() {
            $("#chatbot-messages").empty();
            handleUserInput(qaPairs[2].question)
        })
        $("#response4").click(function() {
            $("#chatbot-messages").empty();
            handleUserInput(qaPairs[3].question)
        })
    })
</script>