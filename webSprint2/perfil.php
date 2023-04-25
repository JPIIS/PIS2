<?php
  include 'conexion_bd.php';

  session_start();

  if(!isset($_SESSION['usuario'])) {
    echo ' 
      <script>
        alert("Debes iniciar sesión o registrarte para poder acceder al apartado de perfil.");
        window.location = "inicio.php";
      </script>
    ';
    session_destroy();
    die();
  }

  $nick = $_SESSION['usuario']; // Obtenemos el nick del usuario logueado

  $sql = "SELECT nombre, email, nacimiento, nick, pass FROM usuarios WHERE nick = '$nick'";
  $result = mysqli_query($conexion, $sql);

  if (!$result) {
    die("Error al obtener los datos del usuario: " . mysqli_error($conexion));
  }

  $row = mysqli_fetch_assoc($result);
?>

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
    <title>Old School Games - Perfil</title>
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
      <h1>PERFIL</h1>
    </div>

    <div id="terminos-condiciones">
      <form action="modificar_usuario.php" method="POST">
        <label for="name"><b>Nombre y apellidos</b></label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>"><br>

        <label for="email"><b>Email</b></label> 
        <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"><br>

        <label for="birthdate" id="nacimiento">Fecha de nacimiento</label>
        <input type="text" id="nacimiento" name="nacimiento" value="<?php echo $row['nacimiento']; ?>"><br>

        <label for="name"><b>Nombre usuario</b></label>
        <input type="text" id="nick" name="nick" value="<?php echo $row['nick']; ?>"><br>

        <label for="pwd"><b>Contraseña</b></label>
        <input type="text" id="pass" name="pass" value="<?php echo $row['pass']; ?>"><br>
      </form>
    </div>

    <a href="modificar_usuario.php" id="enlace">
        <button class="btn btn-primary btn-primary-outline-success" type="button" id="botonVolver3">MODIFICAR DATOS</button>
    </a>
    <br>
    <a href="cerrar_sesion.php" id="enlace">
        <button class="btn btn-primary btn-primary-outline-success" type="button" id="botonVolver3">CERRAR SESIÓN</button>
    </a>
    <br>
    <a href="eliminar_usuario.php" id="enlace">
        <button class="btn btn-primary btn-primary-outline-success" type="button" id="botonVolver3">ELIMINAR CUENTA</button>
    </a>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>