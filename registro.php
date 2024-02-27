<?php
$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$conexion = mysqli_connect("localhost", "root", "", "usuario");

$consulta = "INSERT INTO usuario (usuario, nombre, apellido, correo, contraseña) VALUES ('$usuario', '$nombre', '$apellido', '$correo', '$contraseña')";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    echo "<h1>Registro exitoso</h1>";
    header("location: home.php"); // Puedes redirigir al usuario a la página de inicio de sesión o a otra página después del registro.
} else {
    echo "<h1>Error en el registro</h1>";
    // Puedes manejar el error de alguna manera, redirigir a la página de registro nuevamente, mostrar un mensaje, etc.
}

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="registro_usuario.php" method="post">
        <h1>Registro</h1>
        <p>Usuario<input type="text" placeholder="Ingrese su usuario" name="usuario"></p>
        <p>Nombre<input type="text" placeholder="Ingrese su nombre" name="nombre"></p>
        <p>Apellido<input type="text" placeholder="Ingrese su apellido" name="apellido"></p>
        <p>Correo<input type="text" placeholder="Ingrese su correo" name="correo"></p>
        <p>Contraseña<input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>