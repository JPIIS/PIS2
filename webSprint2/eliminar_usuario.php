<?php
    include 'conexion_bd.php';
    session_start();

    $nick = $_POST['nick'];

    $query = "DELETE FROM usuarios WHERE nick='$nick'";

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
    session_destroy();
    header("location: inicio_sesion.php");
?>