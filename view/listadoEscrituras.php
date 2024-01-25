<?php 
session_start();
if(!isset($_SESSION['usuario'])&&empty($_SESSION['usuario'])){
    header("location: http://localhost/archivo/view/login.php");
}
require '../other/header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Danny Quispe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escrituras Públicas</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../assets/css/listadoEscrituras.css">
</head>
<body class="cuerpo-listado">
    <main>
        <div class="container py-4 text-center">
            <h2>Escrituras Públicas</h2>

            <div class="row g-4">
                <div class="col-auto">
                    <label for="num_registros" class="col-form-label">Mostrar: </label>
                </div>

                <div class="col-auto">
                    <select name="num_registros" id="num_registros" class="form-select">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="num_registros" class="col-form-label">registros </label>
                </div>

                <div class="col-5"></div>

                <div class="col-auto">
                    <label for="campo" class="col-form-label">Buscar: </label>
                </div>
                <div class="col-auto">
                    <input type="text" name="campo" id="campo" class="form-control">
                </div>
                <div class="col-auto">
                    <button for="campo" class="col-form-label" id="voz">Voz</button>
                </div>
            </div>

            <div class="row py-4">
                <div class="col">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <th class="sort asc">idSol</th>
                            <th class="sort asc">TIPO DE ESCRITURA</th>
                            <th class="sort asc">CÓDIGO DE NOTARIO</th>
                            <th class="sort asc">OTORGANTE</th>
                            <th class="sort asc">FAVORECIDO</th>
                            <th class="sort asc">DÍA</th>
                            <th class="sort asc">MES</th>
                            <th class="sort asc">AÑO</th>
                            <th class="sort asc">OBSERVACIÓN</th>
                        </thead>
                        <tbody id="content">
                            <!-- Contenido de la tabla generado por JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label id="lbl-total"></label>
                </div>
                <div class="col-6" id="nav-paginacion"></div>
                <input type="hidden" id="pagina" value="1">
                <input type="hidden" id="orderCol" value="0">
                <input type="hidden" id="orderType" value="asc">
            </div>
        </div>
    </main>
<script src="../assets/js/listadoEscrituras.js"></script>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php //require "../other/footer.php"; ?>
