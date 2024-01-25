<?php
session_start();
if (!isset($_SESSION['usuario']) && empty($_SESSION['usuario'])) {
    header("location: http://localhost/archivo/view/login.php");
}

include "../other/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="../node_modules/chart.js/dist/chart.umd.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div class="content-container">
        <div class="box">
            <span style="--i:1;"><img src="../img/image1.jpg" alt=""></span>
            <span style="--i:2;"><img src="../img/image2.jpg" alt=""></span>
            <span style="--i:3;"><img src="../img/image3.jpg" alt=""></span>
            <span style="--i:4;"><img src="../img/image4.jpg" alt=""></span>
            <span style="--i:5;"><img src="../img/image5.jpg" alt=""></span>
            <span style="--i:6;"><img src="../img/image6.jpg" alt=""></span>
            <span style="--i:7;"><img src="../img/image7.jpg" alt=""></span>
            <span style="--i:8;"><img src="../img/image8.jpg" alt=""></span>
        </div>
    </div>

    <h3>Graficos</h3>
    <section class="layout">
        <div>
            <h4>Grafico Expedientes</h4>
            <canvas id="barras"></canvas>
        </div>
        <div>
            <h4>Grafico Partidas</h4>
            <canvas id="linea"></canvas>
        </div>
        <div>
            <h4>Grafico: Atencion de solicitudes por dia</h4>
            <canvas id="line"></canvas>
        </div>
        <div>
            <h4>Grafico: Estado de solicitudes</h4>
            <canvas id="circulo"></canvas>
        </div>
        <!-- MAS CONTENEDORES PARA MAS GRAFICOS SI ES NECESARIO -->
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </section>
</body>
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
        <a class="button1 chat-gpt-embebido" href="chat-gpt-embebido">
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
<script src="../assets/js/main.js">

</script>

</html>

<?php include "../other/footer.php"; ?>