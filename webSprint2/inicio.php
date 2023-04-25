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
    <title>Old School Games - Inicio</title>
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
              <li>
                <a href="#"> <img id="loginImg" src="img/loginIMG.png" alt="Logo"></a>
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
        <h1>INICIO</h1>
      </div>

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Carousel 1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Carousel 3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Carousel 2.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="inicio-secciones">
        <h2>JUEGOS POPULARES</h2>
      </div>

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
            <a href="http://localhost:3000/" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
      </div>

      <div class="inicio-secciones">
        <h2>ÚLTIMAS NOTICIAS</h2>
      </div>

      <div class="card-group">
        <div class="card">
          <img src="img/work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">NOTICIA 1</h5>
            <p class="card-text">Disponible próximamente.</p>
            <a href="noticias.php" class="btn btn-primary">VER NOTICIA</a>
          </div>
        </div>
        <div class="card">
          <img src="img/work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">NOTICIA 2</h5>
            <p class="card-text">Disponible próximamente.</p>
            <a href="noticias.php" class="btn btn-primary">VER NOTICIA</a>
          </div>
        </div>
        <div class="card">
          <img src="img/work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">NOTICIA 3</h5>
            <p class="card-text">Disponible próximamente.</p>
            <a href="noticias.php" class="btn btn-primary">VER NOTICIA</a>
          </div>
        </div>
      </div>

      <div class="inicio-secciones">
        <h2>PRÓXIMOS TORNEOS</h2>
      </div>

      <div class="card-group">
        <div class="card">
          <img src="img/work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TORNEO 1</h5>
            <p class="card-text">Disponible próximamente.</p>
            <a href="juego.php" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
        <div class="card">
          <img src="img/work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TORNEO 2</h5>
            <p class="card-text">Disponible próximamente.</p>
            <a href="juego.php" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
        <div class="card">
          <img src="img/work.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TORNEO 3</h5>
            <p class="card-text">Disponible próximamente.</p>
            <a href="juego.php" class="btn btn-primary">JUGAR</a>
          </div>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
