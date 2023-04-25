<?php
    session_start();
    include 'conexion_bd.php';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $nacimiento = $_POST['nacimiento'];
    $nick = $_POST['nick'];
    $pass = $_POST['pass'];
    
    //contraseña encriptada
    $pass = hash('sha512', $pass);

    $query = "UPDATE usuarios SET nombre='$nombre', email='$email', nacimiento='$nacimiento', nick='$nick', pass='$pass' WHERE nick='$nick'";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo ' 
            <script>
                alert("Los datos del usuario han sido actualizados correctamente.");
                window.location = perfil.php";
            </script>
        ';
    } else {
        echo ' 
            <script>
                alert("Error al actualizar los datos del usuario: " . mysqli_error($conexion)");
                window.location = perfil.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>