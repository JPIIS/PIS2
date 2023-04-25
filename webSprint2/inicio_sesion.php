<?php
    session_start();

    if(isset($_SESSION['usuario'])) {
      header("location: inicio.php");
    }
?>

<!doctype html>
<html lang="en" id="iniciar-sesion">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icono.ico">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Old School Games - Inicio Sesión</title>
  </head>

  <body id="inicio-sesion">

    <header class="encabezado">
      <p> 
        <img src="img/logo.png">OLD SCHOOL GAMES
      </p>
    </header>

    <div class="titulo-apartados">
      <h1>INICIO SESIÓN</h1>
    </div>

    <form action="login_usuario.php" method="POST">
      <p>Rellene los siguientes campos para iniciar sesión en Old School Games</p>

      <hr>
      <label for="name"><b>Nombre usuario</b></label>
      <input type="text" placeholder="Introduce tu nombre de usuario" name="nick" required><br>
      <label for="pwd"><b>Contraseña</b></label>
      <input type="password" placeholder="Introduce tu contraseña" name="pass" required><br>
      <hr>

      <button type="submit" id="btn-iniciar">INICIAR SESIÓN</button>

      <p>¿No estás registrado? <a href="registro.php">Registrarme</a></p>
		
	  </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
