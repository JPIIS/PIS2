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
    <title>Old School Games - Juegos</title>
  </head>

  <body>

    <header class="encabezado">
      <p> 
        <img src="img/logo.png">OLD SCHOOL GAMES
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
        <h1>JUEGOS</h1>
      </div>

      <nav class="navbar2 navbar-light bg-light">
        <div class="container-fluid">
          <form class="d-flex" id="form-juegos">
            <input class="form-control me-2" type="search" placeholder="Buscar juego..." aria-label="Search">
            <button class="btn btn-primary btn-primary-outline-success" type="button">BUSCAR</button>
            <select class="form-select" aria-label="Default select example">
              <option selected>Categoría</option>
              <option value="1">Un jugador</option>
              <option value="2">Multijugador</option>
              <option value="3">Clásicos</option>
              <option value="3">Deportes</option>
              <option value="3">Infantiles</option>
              <option value="3">Rol</option>
            </select>
          </form>
        </div>
      </nav>

      <div class="card-group">
        <div class="card">
          <img src="img/tetris.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TETRIS</h5>
            <p class="card-text">Tetris es un juego de puzzle donde los jugadores mueven bloques para evitar que la pila de bloques alcance la parte superior.</p>
            <a href="juego.php" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
        <div class="card">
          <img src="img/tresenraya.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TRES EN RAYA</h5>
            <p class="card-text">El juego de las tres en raya es un juego donde dos jugadores alternan turnos para hacer una fila de tres símbolos iguales.</p>
            <a href="juego.php" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
        <div class="card">
          <img src="img/ajedrez.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">AJEDREZ</h5>
            <p class="card-text">El ajedrez es un juego de estrategia donde dos jugadores se enfrentan en un tablero y mueven piezas para capturar al rey del oponente.</p>
            <a href="juego.php" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
      </div>

      <div class="card-group">
        <div class="card">
          <img src="img/work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">JUEGO 4</h5>
            <p class="card-text">Disponible próximamente.</p>
            <a href="juego.php" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
        <div class="card">
          <img src="img/work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">JUEGO 5</h5>
            <p class="card-text">Disponible próximamente.</p>
            <a href="juego.php" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
        <div class="card">
          <img src="img/work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">JUEGO 6</h5>
            <p class="card-text">Disponible próximamente.</p>
            <a href="juego.php" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>