<?php
require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Registro de Atención</title>
    <style>
        #options {
            display: none;
        }

        #btnBuscar {
            background-color: #4CAF50; /* Color verde, puedes cambiarlo según tus preferencias */
            color: white;
            font-family: 'Arial', sans-serif; /* Cambiar a la fuente deseada */
            font-size: 18px; /* Tamaño de la fuente, ajusta según sea necesario */
        }



        #btnBuscar {
            /* ... (otras reglas) ... */
            transition: background-color 0.3s, color 0.3s; /* Agrega transición para el color de fondo y texto */
        }

        #btnBuscar:hover {
            background-color: #45a049; /* Cambia el color al pasar el ratón por encima */
            color: #fff; /* Cambia el color del texto al pasar el ratón por encima */
        }


        #search-container {
            background-color: rgba(255, 255, 255, 0.2); /* Color blanco con opacidad del 80% */
            padding: 10px; /* Ajusta según sea necesario */
            border-radius: 10px; /* Ajusta según sea necesario */
        }


        /* Estilo para el botón "Guardar" */
        .button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 20px 30px;
            font-size: 16px;
            position: relative;
            transition: background-color 0.3s;
        }

        .button::before {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg, #ff00ff, #00ffff);
            background-size: 200% 200%;
            border-radius: 5px;
            z-index: -1;
            animation: glowing 3s linear infinite;
        }

        @keyframes glowing {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .button:hover {
            background: none;
            color: #000;
        }
    </style>
</head>
<body style="background: url('../views/img/paisaje.jpg') no-repeat center center fixed; background-size: cover;">
    <div class="grid-container">
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-large">
                <div class="title-bar-left">
                    <button class="menu-icon" type="button" data-open="my-info"></button>
                    <span class="title-bar-title">ARCHIVO REGIONAL DE PUNO</span>
                </div>
            </div>
            <div class="callout" style="background: url('../views/img/paisaje.jpg') no-repeat center center; background-size: cover;">
            <div class="row column text-center" id="search-container">
                <h5>Buscador</h5>
                <div style="display: inline-block; width: 60%;">
                    <input type="text" name="solicitud" id="solicitud" style="width: 80%; padding: 10px; margin-right: 10px;">
                    <button type="button" class="button" name="btnBuscar" id="btnBuscar" style="padding: 10px;">Buscar</button>
                </div>
            </div>

            </div>
        </div>
    </div>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tres Columnas</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .container {
                display: flex;
                font: sans-serif;
                flex-direction: row;
            }

            .column {
                flex: 1;
                padding: 20px;
                border: 1px solid #ccc;
                margin: 10px;
                background-color: #f9f9f9;
            }
        </style>
    </head>
          
    <div id="resultado">Hola Usuario!</div>
    <hr>

    <?php require_once '../Models/procesar_formulario.php'; ?>
    <form action="../Models/procesar_formulario.php" method="POST">

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
            <input type="radio" name="changeNotario" id="si" value="Si" onclick="showOptions()"> SI
            <input type="radio" name="changeNotario" id="no" value="No" checked onclick="hideOptions()"> NO
            
            <div id="options">
            </select>

            </div>

              </label>
              
                <script>
                  function showOptions() {
                  const options = document.getElementById('options');
                    options.style.display = 'block';
                  }

                  function hideOptions() {
                  const options = document.getElementById('options');
                    options.style.display = 'none';
                    options.value='';

                  }
                </script>

            </div>
        </div>
        
 <button type="submit" class="button" name="btnGuardar" id="btnGuardar" style="margin: 0 auto;">Guardar</button>


    </form>
</body>
</html>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<link rel="stylesheet" href="css/app.css"> 
<script>
    $(document).foundation();
</script>

<script type="text/javascript">
    $(document).ready(function (){
        $("#btnBuscar").click(function(){
            var numerosol = document.getElementById("solicitud").value;
                
            $.ajax({
                type: 'POST',
                data: {'numerosol': numerosol},
                url: '../Controllers/controlTipo.controller.php',
                success: function (res) {
                    $("#resultado").html(res);
                    // obtengo los elementos de input
                    var input1 = document.getElementById('codSol');
                    var input3 = document.getElementById('codUsu');

                    var input2 = document.getElementById('txtnumsolicitud'); 
                    var input4 = document.getElementById('idusuario'); 

                    // se copia los valores
                    input2.value = input1.value;
                    input4.value = input3.value;
                }, 
                error: function (err) {
                    console.log("Error");
                    $("#resultado").html("error");
                }
            });
        });

        $.ajax({
            type: 'POST',
            data: '',
            url: '../Controllers/mostrarNotario.controller.php',
            success: function (res) {
                $("#options").html(res);
            }, 
            error: function (err) {
                console.log("Error");
                $("#options").html("error");
            }
        });
    });
</script>
</html>

</body>

<?php include "footer.php"; ?>



