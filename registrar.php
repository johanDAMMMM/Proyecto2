<?php
    include("bd.php");

    if (isset($_POST['submit'])) {
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contraseña']) >=1 ) {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $usuario = trim($_POST['usuario']);
            $correo = trim($_POST['correo']);
            $contraseña = trim($_POST['contraseña']);
            $contraseña= hash('sha512', $contraseña);
            $consulta = "INSERT INTO usuarios(nombre, apellido, usuario, correo, contraseña) VALUES ('$nombre','$apellido','$usuario','$correo','$contraseña')";
            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado) {
                echo '
                <script>
                    alert("Se ha registrado el usuario con exito");
                    window.location = "login.php";
                </script>
                ';
            } else {
                echo '
                <script>
                    alert("!ERROR¡ No se ha podido registrar el usuario");
                </script>
                ';
            }
        }   else {
            echo '
            <script>
                alert("Por favor ingrese todos los datos pedidos para registrarse");
            </script>
            ';
        }
    }
?>