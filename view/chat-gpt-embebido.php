  <head>
    <meta charset="utf-8">
    <title>Home | Mi Proyecto</title>

    <!-- Favicon -->
    <link rel="icon" href="https://nubecolectiva.com/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Archivo CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- <script src="../node_modules/openai/index.js"></script> -->
  </head>

  <body>

    <main>

      <div class="container mb-5">

        <!-- Header -->
        <header class="d-flex flex-wrap py-3 mb-5 border-bottom">

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Mi Proyecto</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="nosotros.html">Nosotros</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="servicios.html">Servicios</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="contacto.html">Contacto</a>
                  </li>

                </ul>

              </div>
            </div>
          </nav>

        </header>

        <div class="row">

          <div class="col-md-12 text-center mt-5 mb-5">

            <h1>Chat Con Inteligencia artificial, resuelva todas sus dudas aqui</h1>

            <!-- Caja de texto y botón -->
            <div class="input-group input-group-lg mt-5 mb-5">
              <input type="text" class="form-control" placeholder="Proceso para obtener una propiedad en peru" id="prompt">
              <span class="input-group-btn">
                <button class="btn btn-primary btn-lg ms-1" id="enviar">Enviar</button>
              </span>
            </div>

            <!-- Respuesta de la IA -->
            <p id="mensajes" class="fs-3"></p>

          </div>

        </div>

      </div>

    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted">Mi Proyecto © <script>
            document.write(new Date().getFullYear())
          </script> </span>
      </div>
    </footer>

    <!-- Archivo JS Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Archivo JS -->
    <script type="module" src="../assets/js/chat-gpt-embebido.js"></script>

  </body>

  </html>