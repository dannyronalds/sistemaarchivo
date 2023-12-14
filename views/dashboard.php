<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilos CSS solo para el contenido principal */
        .content-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(../views/img/paisaje.jpg);
            background-size: cover;
        }

        .box {
            position: relative;
            width: 200px;
            height: 300px;
            transform-style: preserve-3d;
            animation: animate 20s linear infinite;
            margin: auto; /* Centrar el contenido principal */
        }

        @keyframes animate {
            0% {
                transform: perspective(1000px) rotateY(0deg);
            }
            100% {
                transform: perspective(1000px) rotateY(360deg);
            }
        }

        .box span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-origin: center;
            transform-style: preserve-3d;
            transform: rotateY(calc(var(--i) * 45deg)) translateZ(400px);
            -webkit-box-reflect: below 0px linear-gradient(transparent, transparent, #0004);
        }

        .box span img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="content-container">
    <div class="box">
        <span style="--i:1;"><img src="img/image1.jpg" alt=""></span>
        <span style="--i:2;"><img src="img/image2.jpg" alt=""></span>
        <span style="--i:3;"><img src="img/image3.jpg" alt=""></span>
        <span style="--i:4;"><img src="img/image4.jpg" alt=""></span>
        <span style="--i:5;"><img src="img/image5.jpg" alt=""></span>
        <span style="--i:6;"><img src="img/image6.jpg" alt=""></span>
        <span style="--i:7;"><img src="img/image7.jpg" alt=""></span>
        <span style="--i:8;"><img src="img/image8.jpg" alt=""></span>
    </div>
</div>

</body>
</html>

<?php include "footer.php"; ?>



