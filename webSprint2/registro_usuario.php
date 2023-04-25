<?php
    include 'conexion_bd.php';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $nacimiento = $_POST['nacimiento'];
    $nick = $_POST['nick'];
    $pass = $_POST['pass'];

    //contraseña encriptada
    $pass = hash('sha512', $pass);

    $query = "INSERT INTO usuarios(nombre, email, nacimiento, nick, pass) VALUES ('$nombre', '$email', '$nacimiento', '$nick', '$pass')";

    $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");

    if(mysqli_num_rows($verificar_email) > 0) {
        echo ' 
            <script>
                alert("Ese correo ya está registrado en el sistema.");
                window.location = "registro.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    $verificar_nick = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nick='$nick'");

    if(mysqli_num_rows($verificar_nick) > 0) {
        echo ' 
            <script>
                alert("Ese usuario ya está registrado en el sistema.");
                window.location = "registro.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar) {
        echo ' 
            <script>
                alert("Usuario creado correctamente");
                window.location = "inicio_sesion.php";
            </script>
        ';
    } else {
        echo ' 
            <script>
                alert("El usuario no ha podido crearse. Intentalo de nuevo.");
                window.location = "registro_usuario.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>