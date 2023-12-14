<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ARP | BIENVENIDO</title>
    <link href="https://fonts.googleapis.com/css2?family=YourChosenFont&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 1px;
        }

        .menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-image: url('../views/img/banner1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            padding: 10px;
            height: 70px; /* Altura del header */
            position: relative;
            z-index: 1;
        }

        .menu .logo {
            width: 40px; /* Tamaño del logo */
            height: 50px; /* Tamaño del logo */
          
            overflow: hidden; /* Ocultar cualquier contenido fuera del borde */
        }

        .menu .logo img {
            width: 100%; /* Ajustar al tamaño del contenedor */
            height: 100%; /* Ajustar al tamaño del contenedor */
        }

        .message {
            font-family: 'YourChosenFont', sans-serif;
            font-size: 2em; /* Tamaño de la fuente */
            font-weight: bold;
            text-align: center;
            color: white;
            position: relative;
            z-index: 2;
        }

        ul {
            list-style: none; /* Quita los marcadores de lista (viñetas) */
        }

        ul li {
            display: inline-block;
            padding: 5px; /* Ajusta el espacio alrededor de los elementos de la lista */
        }

        ul li a {
            font-family: 'YourChosenFont', sans-serif;
            font-size: 1.5em; /* Tamaño de la fuente para los enlaces */
            font-weight: bold;
            text-decoration: none;
            padding: 10px 20px; /* Añade un padding para que se vea como un botón */
            border: 2px solid transparent; /* Añade un borde transparente para resaltar al pasar el ratón */
            transition: border 0.3s ease, color 0.3s ease; /* Agrega una transición para suavizar el efecto de cambio de borde y color */
            color: white; /* Color de las letras */
        }

        ul li a:hover {
            color: white; /* Cambia el color al pasar el ratón */
            border-color: white; /* Cambia el color del borde al pasar el ratón */
        }

        /* Estilos para el menú desplegable */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: black;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 10px 14px;
            text-decoration: none;
            display: block;
        }

        /* Mostrar las opciones cuando se pasa el cursor sobre el elemento li */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <nav class="menu">
        <div class="logo">
            <img class="thumbnail" src="./img/logoarchivo.jpg">
        </div>
        <ul>
            <li><a href="dashboard.php">Inicio</a></li>
        </ul>
        <div class="message">
            DIRECCION DE ARCHIVO INTERMEDIO
        </div>
        <ul>
            <li><a href="inicio.php">Buscador</a></li>
            <li class="dropdown"> <!-- Agrega una clase "dropdown" al elemento li -->
                <a href="#" class="dropbtn">Listado</a> <!-- Agrega una clase "dropbtn" al enlace y "#" como href -->
                <div class="dropdown-content">
                    <a href="listadoEscrituras.php">Escrituras</a> <!-- Agrega las opciones del menú desplegable -->
                    <a href="listadoPartidas.php">Partidas</a>
                    <a href="listadoExpedientes.php">Expedientes</a>
                </div>
            </li>
            <li><a href="listadoNotarios.php">Notarios</a></li>
            <li><a href="verCambios.php">Ver Cambios</a></li>
        </ul>
    </nav>
</body>

</html>





