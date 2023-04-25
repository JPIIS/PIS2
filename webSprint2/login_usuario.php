<?php
    session_start();
    include 'conexion_bd.php';

    $nick = $_POST['nick'];
    $pass = $_POST['pass'];
    $pass = hash('sha512', $pass);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nick='$nick' AND pass='$pass'");

    if(mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $nick;
        header("location: inicio.php");
        exit;
    } else {
        echo ' 
            <script>
                alert("Usuario o contraseña incorrectos. Intente de nuevo.");
                window.location = "inicio_sesion.php";
            </script>
        ';
        exit;
    }
?>