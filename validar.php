<?php

    session_start();

    include("bd.php");

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        echo '
        <script>
            alert("Inicio de sesión exitoso");
            window.location = "index.php";
        </script>
        ';
        exit;
    }else{
        echo '
        <script>
            alert("No se encontro el usuario. Verifique bien los datos ingresados");
            window.location = "login.php";
        </script>
        ';
        exit;
    }
?>