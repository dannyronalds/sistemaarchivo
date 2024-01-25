<?php

session_start();
if(!isset($_SESSION['usuario'])&&empty($_SESSION['usuario'])){
    header("location: http://localhost/archivo/view/login.php");
}

require '../other/header.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/buscador.css">
    <title>Registro de Atención</title>
</head>

<body class = "cuerpo-body">
    <div class="grid-container">
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-large">
                <div class="title-bar-left">
                    <button class="menu-icon" type="button" data-open="my-info"></button>
                    <span class="title-bar-title">ARCHIVO REGIONAL DE PUNO</span>
                </div>
            </div>
            <div class="callout header-buscador">
                <div class="row column text-center" id="search-container">
                    <h5>Buscador</h5>
                    <div class = "contenedor-buscar">
                        <input type="text" name="solicitud" class="entrada-buscar" id="solicitud">
                        <button type="button" class="button boton-buscar" name="btnBuscar" id="btnBuscar">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tres Columnas</title>
    </head>

    <div id="resultado"></div>
    <hr>
    <form action="../controller/procesar_formulario.php" method="POST">

        <div class="container">
            <div class="row column">
                <h3>Registro de atención</h3>
                <p>
                    <label for="txtnumsolicitud">Número de Solicitud:</label>
                    <input type="text" name="txtnumsolicitud" id="txtnumsolicitud" value="">

                    <label for="idusuario">ID de Usuario:</label>
                    <input type="text" name="idusuario" id="idusuario" value="">

                    <label for="tipodoc">¿Qué se atendió?</label>
                    <select name="tipodoc" id="tipodoc" class="form-control" required>
                        <option value="Testimonio">Testimonio </option>
                        <option value="Copia Certificada"> Copia Certificada </option>
                        <option value="Copia Certificada por Expediente civil"> Copia Certificada por Expediente civl </option>
                        <option value="Constancia por Escritura"> Constancia por Escritura</option>
                        <option value="Constancia por Expediente civil"> Constancia por Expediente civil</option>
                        <option value="Constancia por Partida">Constancia por Partida</option>
                        <option value="C.C. Nacimiento"> C.C. Nacimiento</option>
                        <option value="C.C. Matrimonio"> C.C. Matrimonio</option>
                        <option value="C.C. Defuncion"> C.C. Defuncion</option>
                        <option value="Copia Simple"> Copia Simple</option>
                        <option value="N.A."> N.A. </option>
                        <option value="Exhibicion"> Exhibicion </option>
                        <option value="Devuelto"> Devuelto </option>
                    </select>
                </p>
            </div>
        </div>

        <div class="row column">
            <label for="estado">Estado del documento</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Atendido">Atendido</option>
                <option value="No Atendido">No Atendido</option>
                <option value="Pendiente">Devuelto</option>
            </select>

            <label for="fechaatendida">Fecha de Atención:</label>
            <input class="form-control" type="date" name="fechaatendida" id="fechaatendida" value="" required>

            <label for="changeNotario">Cambio de Notario?</label>
            <input type="radio" name="changeNotario" id="si" value="Si"> SI
            <input type="radio" name="changeNotario" id="no" value="No" checked> NO
            <div id="options">
            </div>
        </div>
        <button type="submit" class="button boton-guardar" name="btnGuardar" id="btnGuardar">Guardar</button>
    </form>
</body>

</html>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="../assets/css/app.css">
<script src="../assets/js/buscador.js"></script>
</html>
</body>

<?php include "../other/footer.php"; ?>