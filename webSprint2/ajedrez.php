<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icono.ico">
    <link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        body {
            padding-bottom: 70px;
        }
    </style>
    <title>Old School Games - Juegos</title>
  </head>

  <body>

    <header class="encabezado">
      <p> 
        <img src="img/logo.png">JUEGA, GANA Y REPITE
      </p>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-2" id="menu">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="inicio.php">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="juegos.php">JUEGOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="noticias.php">NOTICIAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="foros.php">FOROS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="torneos.php">TORNEOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="amigos.php">AMIGOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="perfil.php">PERFIL</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
              <div class="button-container-menu">
                <button class="btn btn-primary btn-primary-outline-success" type="button">BUSCAR</button>
                <a href="cerrar_sesion.php" id="enlace">
                  <button class="btn btn-primary btn-primary-outline-success" type="button">LOG IN</button>
                </a>
              </div>
            </form>
          </div>
        </div>
      </nav>

      <div class="titulo-apartados">
        <h1>JUEGO</h1>
      </div>

      <div class="navbar" id="barraJuegoSuperior">
        <div>
          <h2 class="game-title">TETRIS</h2>
          <h3 class="game-title">UN JUGADOR</h3>
        </div>
        <a href="juegos.html" id="enlace">
          <button class="btn btn-primary btn-primary-outline-success" type="button" id="botonVolver">SALIR DEL JUEGO</button>
        </a>
      </div>      

      <main>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12 text-center">
                      <h2 id="puntaje">Presiona <kbd>P</kbd> o pulsa el botón para comenzar</h2>
                  </div>
                  <div class="col-12 text-center">
                      <canvas id="canvas"></canvas>
                      <div class="mt-2">
                          <button id="btnIniciar" class="btn btn-success"><i class="fas fa-play"></i></button>
                          <button hidden id="btnPausar" class="btn btn-success"><i class="fas fa-pause"></i></button>
                          <button id="btnIzquierda" class="btn btn-success"><i class="fas fa-arrow-left"></i></button>
                          <button id="btnAbajo" class="btn btn-success"><i class="fas fa-arrow-down"></i></button>
                          <button id="btnDerecha" class="btn btn-success"><i class="fas fa-arrow-right"></i></button>
                          <button id="btnRotar" class="btn btn-success"><i class="fas fa-undo"></i></button>
                          <button class="btn btn-danger" id="reset">Reset</button>
                      </div>
                  </div>

              </div>
          </div>
      </main>

   <footer class="px-2 py-2 fixed-bottom bg-dark">
        <span class="text-muted">Tetris
            
        </span>
</footer>   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/sweetalert2.min.js"></script>
<script src="js/tetris.js"></script>

  </body>
</html>