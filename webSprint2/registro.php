<!doctype html>
<html lang="en" id="registrar">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icono.ico">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Old School Games - Registro</title>
  </head>

  <body id="registro">

    <header class="encabezado">
      <p> 
        <img src="img/logo.png">OLD SCHOOL GAMES
      </p>
    </header>

    <div class="titulo-apartados">
        <h1>REGISTRO</h1>
    </div>

    <form action="registro_usuario.php" method="POST">
	    <p>Rellene los siguientes campos para registrarte en Old School Games</p>

		  <hr>
        <label for="name"><b>Nombre y apellidos</b></label>
        <input type="text" placeholder="Introduce tu nombre completo" name="nombre" required><br>

        <label for="email"><b>Email</b></label> 
        <input type="text" placeholder="Introduce tu email" name="email" required><br>

        <label for="birthdate" id="nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="birthdate" name="nacimiento" required>

        <label for="name"><b>Nombre usuario</b></label>
        <input type="text" placeholder="Introduce tu nombre de usuario" name="nick" required><br>

        <label for="pwd"><b>Contraseña</b></label>
        <input type="password" placeholder="Introduce tu contraseña" name="pass" required><br>

        <div>
          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
          <label class="form-check-label" for="exampleCheck1">Acepto los términos y condiciones de Old School Games. <a href="terminos.html">Ver términos</a></label>
        </div>
		  <hr>

		  <button type="submit" id="btn-registrar">REGISTRARME</button>

		  <p>¿Ya tienes cuenta? <a href="inicio_sesion.php">Iniciar sesión</a></p>
	  </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
